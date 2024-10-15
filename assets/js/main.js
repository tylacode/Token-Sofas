/*==================== SHOW MENU ====================*/
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)
    
    // Validate that variables exist
    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            // We add the show-menu class to the div tag with the nav__menu class
            nav.classList.toggle('show-menu')
        })
    }
}
showMenu('nav-toggle','nav-menu')

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)

/*==================== CHANGE BACKGROUND HEADER ====================*/ 
function scrollHeader(){
    const nav = document.getElementById('header')
    // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 200) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*==================== SHOW SCROLL TOP ====================*/ 
function scrollTop(){
    const scrollTop = document.getElementById('scroll-top');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollTop.classList.add('show-scroll'); else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)

/*==================== DARK LIGHT THEME ====================*/ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-sun'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx-moon' : 'bx-sun'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'bx-moon' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

/*==================== SCROLL REVEAL ANIMATION ====================*/
// const sr = ScrollReveal({
    // origin: 'top',
    // distance: '30px',
    // duration: 2000,
    // reset: true
// });

// sr.reveal(`.home__data, .home__img,
            // .about__data, .about__img,
            // .services__content, .menu__content,
            // .app__data, .app__img,
            // .contact__data, .contact__button,
            // .footer__content`, {
    // interval: 200
// })

// product preview popup
// Select all cards and the popup elements
const cards = document.querySelectorAll('.card');
const popup = document.getElementById('productPopup');
const closePopup = document.getElementById('closePopup');
const popupImage = document.getElementById('popupImage');
const popupName = document.getElementById('popupName');
const popupPrice = document.getElementById('popupPrice');

// Add click event listener to each card
cards.forEach(card => {
    card.addEventListener('click', () => {
        console.log('Card clicked:', card);
        // Get product details
        const image = card.querySelector('img').src;
        const name = card.querySelector('.product_name').innerText;
        const price = card.querySelector('.price').innerText;

        // Set the popup content
        popupImage.src = image;
        popupName.innerText = name;
        popupPrice.innerText = price;

        // Show the popup
        popup.style.display = 'flex';
    });
});

// Close the popup when the close button is clicked
closePopup.addEventListener('click', () => {
    popup.style.display = 'none';
    document.getElementById('clientInfo').style.display = 'none';
    document.getElementById('productDescription').style.display = 'flex';
    document.getElementById('reviewButtons').style.display = 'flex';
});

// Close the popup when clicking outside of the popup content
popup.addEventListener('click', (event) => {
    if (event.target === popup) {
        popup.style.display = 'none';
        document.getElementById('clientInfo').style.display = 'none';
        document.getElementById('productDescription').style.display = 'flex';
        document.getElementById('reviewButtons').style.display = 'flex';
    }
});


// data sent to email address 
document.getElementById('orderNowButton').addEventListener('click', function() {
    // Show the input fields for email and phone number
    document.getElementById('clientInfo').style.display = 'block';
    document.getElementById('productDescription').style.display = 'none';
    document.getElementById('reviewButtons').style.display = 'none';
});

document.getElementById('cancel').addEventListener('click', function() {
    // Show the input fields for email and phone number
    document.getElementById('clientInfo').style.display = 'none';
    document.getElementById('productDescription').style.display = 'flex';
    document.getElementById('reviewButtons').style.display = 'flex';
});

document.getElementById('submitOrderButton').addEventListener('click', function() {
    const productName = document.getElementById('popupName').innerText;
    const productPrice = document.getElementById('popupPrice').innerText;
    const clientEmail = document.getElementById('clientEmail').value;
    const clientPhone = document.getElementById('clientPhone').value;

    const formData = new FormData();
    formData.append('email', 'tokensofas@gmail.com');
    formData.append('subject', 'New Order');
    formData.append('productName', productName);
    formData.append('productPrice', productPrice);
    formData.append('clientEmail', clientEmail);
    formData.append('clientPhone', clientPhone);

    fetch('https://formsubmit.co/ajax/tokensofas@gmail.com', {
        method: 'POST',
        body: formData,
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (response.ok) {
            alert('Order submitted successfully!');
            // Optionally, you can close the popup here
            document.getElementById('productPopup').style.display = 'none';
        } else {
            alert('There was a problem with your submission.');
        }
    })
    .catch(error => {
        alert('Error: ' + error.message);
    });
});
