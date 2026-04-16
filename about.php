<?php

@include 'config.php';

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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>At Smart Bazar, we redefine the grocery experience by blending cutting-edge technology with the timeless value of farm-fresh quality. Our smart retail management system ensures that your favorite essentials are always in stock and easy to find, while our streamlined delivery process guarantees that freshness reaches your kitchen without delay. We believe that shopping for your everyday needs should be effortless, efficient, and affordable, which is why we’ve built a platform that prioritizes your convenience and health above all else. From our hand-picked organic produce to our secure, seamless checkout, we are committed to being your most trusted partner in building a healthier, smarter lifestyle alignItems</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>At Smart Bazar, we provide a curated selection of farm-fresh produce, premium pantry staples, and daily essentials, all managed through our intelligent retail system for a seamless shopping experience. We bridge the gap between quality and convenience, offering hand-picked organic goods and reliable delivery that fits perfectly into your modern lifestyle. Our goal is to ensure you have easy access to the healthiest ingredients with the efficiency of a truly smart store.less value of farm-fresh quality. Our smart retail management system ensures that your favorite essentials are always in stock and easy to find, while our streamlined delivery process guarantees that freshness reaches your kitchen without delay. We believe that shopping for your everyday needs should be effortless, efficient, and affordable, which is why we’ve built a platform that prioritizes your convenience and health above all else. From our hand-picked organic produce to our secure, seamless checkout, we are committed to being your most trusted partner in building a healthier, smarter lifestyle.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/biju.png" alt="">
         <p>My experience at Smart Bazar has been outstanding. The quality of the products is exceptional, and the delivery service is prompt and reliable.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Biswajit Sahu</h3>
      </div>

      <div class="box">
         <img src="images/sibu.png" alt="">
         <p>"I love the organic selection. It's rare to find such high-quality produce at these prices."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Subhankar Dash</h3>
      </div>

      <div class="box">
         <img src="images/susmita.png" alt="">
         <p>"The customer service at Smart Bazar is exceptional. They go above and beyond to ensure a satisfying shopping experience."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>susmita sahu</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"The convenience of shopping at Smart Bazar cannot be overstated. I can order my groceries with just a few clicks and have them delivered right to my doorstep."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"I've been a loyal customer of Smart Bazar for over a year now, and I'm consistently impressed by the quality and variety of products available."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"The products at Smart Bazar are always fresh and of the highest quality. I never have to worry about the freshness of my groceries."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>