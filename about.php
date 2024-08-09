<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="icon" id="png" href="images/icon2.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading"> 
   <h3>about us</h3>  <!--conexion php con las otras y agrega titulo y-->
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="img aboutmy"> <!--imgen y texto debajo de los productos-->
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet voluptatibus aut hic molestias, reiciendis natus fuga, cumque excepturi veniam ratione iure. Excepturi fugiat placeat iusto facere id officia assumenda temporibus?</p>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
         <a href="contact.php" class="btn">contact us</a> <!--about con boton y conecion a contact.php-->
      </div>

   </div>

</section>


<!--COMEMTARIOS DE CLIENTES EN ABOUT-->

<section class="reviews"> 

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box"> <!--clientes y sus estrellas a la pagina-->
         <img src="images/pic-1.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">  <!--valor de estrellas que le dan a la pagina-->
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Olmedo Mulcue</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Gustavo Petro</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Gustavo Bolivar</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Karen Torres</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Juan Olmer</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dora Oteca</h3>
      </div>

   </div>
</section>

<!--autores y sus redes sociales-->
<section class="authors"> <!--la variable se va a css-->
   <h1 class="title">greate authors</h1>
   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt=""> <!--llamos imagenes de nuestra carpeta de autores-->
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a> <!--iconos que iran con los autores-->
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ingeniero Mulcue</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt=""> <!--llamos imagenes de nuestra carpeta de autores-->
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a> <!--iconos que iran con los autores-->
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Lionel Messi</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt=""> <!--llamos imagenes de nuestra carpeta de autores-->
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a> <!--iconos que iran con los autores-->
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Yina Calderon</h3>
      </div>

      
      <div class="box">
         <img src="images/author-6.jpg" alt=""> <!--llamos imagenes de nuestra carpeta de autores-->
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a> <!--iconos que iran con los autores-->
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ivan Duque</h3>
      </div>


      <div class="box">
         <img src="images/author-2.jpg" alt=""> <!--llamos imagenes de nuestra carpeta de autores-->
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a> <!--iconos que iran con los autores-->
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Katerin Meza</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt=""> <!--llamos imagenes de nuestra carpeta de autores-->
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a> <!--iconos que iran con los autores-->
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Felipe Mina</h3>
      </div>
   
   </div>
</section>


<?php include 'footer.php'?> <!-- cINCLUYE A FOOTER.PHP  -->
<!-- custom  js file link  -->
<script src="js/script.js"></script>
</body>
</html>
