<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{/*conexion con mysqli*/
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!'; /*hace conexion con los valores y cantddad de productos en mysqli*/
   }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>search page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading"> <!--imagen y titulod e einicio de la pagina-->
   <h3>Busca tus series o pelis</h3>
   <p> <a href="home.php">home</a> / search </p>
</div>

<section class="search-form">
   <form action="" method="post">
      <input type="text" name="search" placeholder="search products..." class="box"> <!--cuadro de busqueda-->
      <input type="submit" name="submit" value="search" class="btn">
   </form>
</section>

<section class="products" style="padding-top: 0;"> <!--SE usara para poder hcaer las busquedas de los articulos en phpmyadmin-->


   <div class="box-container">
   <?php
      if(isset($_POST['submit'])){  /*MUESTRA ARTICULO QUE BUSCA*/
         $search_item = $_POST['search'];
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE name LIKE '%{$search_item}%'") or die('query failed'); /*search muestra articulo*/
         if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
   ?>
   <form action="" method="post" class="box"> <!-- box- clase pra cuadro de imagen pa la peli -->
      <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="" class="image"> <!-- imagenes de las pelis -->
      <div class="name"><?php echo $fetch_product['name']; ?></div>
      <div class="price">$<?php echo $fetch_product['price']; ?>Mil</div><!-- simbolos de precios-->
      <input type="number"  class="qty" name="product_quantity" min="1" value="1"> <!-- cuadro # de productos a escoger-->
      <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>"><!-- valores debajo de los products -->
      <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
      <input type="submit" class="btn" value="add to cart" name="add_to_cart"> <!--btn de add_to_cart-->
   </form>
   <?php
            }
         }else{
            echo '<p class="empty">No se han encontrado resultados!</p>';
         }
      }else{
         echo '<p class="empty">buscar algo!</p>'; /*si una variable está vacía*/
      }
   ?>
   </div>
  

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>