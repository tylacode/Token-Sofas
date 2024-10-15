<?php
session_start(); 

define('USERNAME', 'admin'); 
define('PASSWORD', 'tokensofas123'); 
// Check if the user is already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // User is logged in, continue with the admin functionalities
} else {
    // User is not logged in, check for login form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate credentials
        if ($username === USERNAME && $password === PASSWORD) {
            $_SESSION['loggedin'] = true; // Set session variable
        } else {
            $error = "Invalid username or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/boxicons/css/boxicons.min.css">
     <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Admin Login</title>

</head>
<body style="margin-top: 5%;">

<header class="l-header" id="header">
    <nav class="nav bd-container">
        <a href="#" class="nav__logo">
            <img src="./assets/img/Logo & Brand Name.png" width="120px" 
            alt="" style="border-radius: 50px; margin-top: 7%; margin-left: 15%;">
        </a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
                <li class="nav__item"><a href="index.php#about" class="nav__link">About</a></li>
                <li class="nav__item"><a href="index.php#services" class="nav__link">Services</a></li>
                <li class="nav__item"><a href="index.php#menu" class="nav__link">Catalog</a></li>
                <li class="nav__item"><a href="shop.php" class="nav__link">Shop</a></li>
                <li class="nav__item"><a href="index.php#contact" class="nav__link">Contact us</a></li>
                <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
            </ul>
        </div>
        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>


<?php if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true): ?>
    <form class="formLoggin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Admin Panel</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
        <?php if (isset($error)) echo '<p style="color:red;">' . $error . '</p>'; ?>
    </form>
<?php else: ?>
    <?php

 include 'config.php';
 include 'connection.php';

 if(isset($_POST['add_product'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/'.$product_image;

    if(empty($product_name) || empty($product_price) || empty($product_image)){
        $message[] = 'please fill out all';
    }else{
    $insert = "INSERT INTO products(name, price, image) VALUES('$product_name',
     '$product_price', '$product_image')";
    $upload = mysqli_query($conn,$insert);
    if($upload){
        move_uploaded_file($product_image_tmp_name, $product_image_folder);
        $message[] = 'new product added successfully';
    }else{
        $message[] = 'could not add the product';
    }
 }
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");
    header('location:admin.php');
};



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

<header class="l-header" id="header">
    <nav class="nav bd-container">
        <a href="#" class="nav__logo">
            <img src="./assets/img/Logo & Brand Name.png" width="120px" 
            alt="" style="border-radius: 50px; margin-top: 7%; margin-left: 15%;">
        </a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
                <li class="nav__item"><a href="index.php#about" class="nav__link">About</a></li>
                <li class="nav__item"><a href="index.php#services" class="nav__link">Services</a></li>
                <li class="nav__item"><a href="index.php#menu" class="nav__link">Catalog</a></li>
                <li class="nav__item"><a href="shop.php" class="nav__link">Shop</a></li>
                <li class="nav__item"><a href="index.php#contact" class="nav__link">Contact us</a></li>
                <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
            </ul>
        </div>
        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>

 <?php
 
    if(isset($message)){
        foreach($message as $message){
            echo '<span class="message">'.$message.'</span>';
        }
    }
 
 ?>

    <div class="container" style="padding: 8%;">
        <div class="admin-product-form-container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <h2 class="section-title">Add A New Product</h2>
                <input type="text" placeholder="enter product name" name="product_name" class="box">
                <input type="number" placeholder="enter product price" name="product_price" class="box">
                <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                <input type="submit" name="add_product" class="btn" value="add product">
            </form>
        </div>
    </div>

    <?php
    
        $select = mysqli_query($conn, "SELECT * FROM products");
    
    ?>

    <div class="product-display">
        <table class="product-display-table">

            <thead>
                <tr>
                    <th>product image</th>
                    <th>product name</th>
                    <th>product price</th>
                    <th>action</th>
                </tr>
            </thead>

            <?php
            
                while($row = mysqli_fetch_assoc($select)){
            
            ?>

                <tr>
                    <td><img src="uploaded_img/<?php echo $row['image']; ?>" width="100px" heght="30px" alt="">
                    </td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td>
                        <a href="adminupdate.php?edit=<?php echo $row['id']; ?>" class="button">
                            <i class="fas fa-edit"></i>edit</a>

                        <a href="admin.php?delete=<?php echo $row['id']; ?>" class="button"><i class="fas fa-tras">
                            
                        </i>delete</a>

                    </td>
                </tr>

            <?php }; ?>

        </table>
    </div>


    <!--========== SCROLL REVEAL ==========-->
 <script src="https://unpkg.com/scrollreveal"></script>
    <!--========== MAIN JS ==========-->
 <script src="./assets/js/main.js"></script>


</body>
</html>
<?php endif; ?>

</body>
</html>
