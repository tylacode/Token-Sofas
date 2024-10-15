<?php

 @include 'config.php';

 $id = $_GET['edit'];

 if(isset($_POST['update_product'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/'.$product_image;

    if(empty($product_name) || empty($product_price) || empty($product_image)){
        $message[] = 'please fill out all';
    }else{
    $update = "UPDATE products SET name='$product_name', price='$product_price', image='$product_image' WHERE id = $id";
    $upload = mysqli_query($conn,$update);
    if($upload){
        move_uploaded_file($product_image_tmp_name, $product_image_folder);
        $message[] = 'product updated successfully';
    }else{
        $message[] = 'product update failed';
    }
 }
};

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

    <title>tokensofas.com</title>
</head>
<body>

<?php
 
   if(isset($message)){
       foreach($message as $message){
           echo '<span class="message">'.$message.'</span>';
       }
   }
 
?>

 <div class="container">

 <div class="admin-product-form-container centered">

   <?php
   
   $select = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
   while($row = mysqli_fetch_assoc($select)){

   
   ?>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <h2 class="section-title">Update Product</h2>
        <input type="text" placeholder="enter product name" value="<?php echo $row['name']; ?>" name="product_name" class="box">
        <input type="number" placeholder="enter product price" value="<?php echo $row['price']; ?>" name="product_price" class="box">
        <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
        <input type="submit" name="update_product" class="btn" value="update product">
        <a href="admin.php" class="button" style="margin-top: 3%;">back</a>
    </form>

    <?php }; ?>

</div>

 </div>
    
</body>
</html>