<?php

    // require_once 'connection.php';
    include 'connection.php';

    $sql = "SELECT * FROM products";
    $all_product = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/boxicons/css/boxicons.min.css">

        <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>tokensofas.com</title>
</head>

<body>
    <?php
        include_once 'shop.php';
    ?>

    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="admin.php" class="nav__logo"><img src="./assets/img/Logo & Brand Name.png" width="120px" alt="" 
                style="border-radius: 50px; margin-top: 7%; margin-left: 15%;"></a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="index.php#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="index.php#services" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="index.php#menu" class="nav__link">Catalog</a></li>
                    <li class="nav__item"><a href="index.php#menu" class="nav__link active-link">Shop</a></li>
                    <li class="nav__item"><a href="index.php#contact" class="nav__link">Contact us</a></li>
                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main>

    <section class="meu setion bd-cotainer shop_window" id="menu">
        
        <div class="product_window">

        <?php
    
            while($row = mysqli_fetch_assoc($all_product)){
        
        ?>

            <div class="card active">
                <div class="image">
                    <img src="uploaded_img/<?php echo $row['image']; ?>" width="250px" alt="">
                </div>
                <div class="caption">
                    <p class="product_name"><?php echo $row["name"]; ?></p>
                    <p class="price" style="color: green;"><b>$<?php echo $row["price"] ?></b></p>
                    <!-- <p class="discount"><del> </del></p> -->
                </div>

                <div class="calltoaction">
                    <a href="#" class="bttn"><i class='bx bx-cart-alt'></i></a>
                </div>

            </div>

        <?php
            };
    
        ?>

        </div>

         <div class="popup" id="productPopup">
            <div class="popup-content">
                <div id="close">
                    <span class="close" id="closePopup">&times;</span>
                </div>
                <img id="popupImage" src="" alt="" style="width: 100%;">

                <div class="product_discription" id="productDescription">    
                    <h2 id="popupName"></h2>
                    <p id="popupPrice" style="color: green;"></p>
                </div>

                <div class="client-info" id="clientInfo" style="display: none;">
                    <p style="color: black;font-size:x-small;padding:7px">
                        Your details are required for order updates and support. <br>
                        Kindly fill in your details below and we will call you...
                    </p>
                    <input type="email" id="clientEmail" placeholder="Your Email" required>
                    <input type="tel" id="clientPhone" placeholder="Your Phone Number" required>
                    <button id="submitOrderButton" class="button">Submit Order</button>
                    <button id="cancel" class="button cancel">Cancel</button>
                </div>


                <div class="reviewbuttons" id="reviewButtons">
                    <div class="about__button">
                        <button id="orderNowButton" class="button">Order Now</button>
                        <a href="https://wa.me/c/263778007334" class="button">Inquire Now</a>
                    </div>
                </div>

            </div>
        </div>

    </section> 

    </main>

    <!--========== SCROLL REVEAL ==========-->
 <script src="https://unpkg.com/scrollreveal"></script>
    <!--========== MAIN JS ==========-->
 <script src="./assets/js/main.js"></script>


</body>
</html>