<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> About us </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Logo -->
    <link rel='shortcut icon' type='image/x-icon' href='images/travel.png'/>

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Css file link -->
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>

<div class="topnav" id="myTopnav">
    <a href="index.php">HOME</a>
    <a href="aboutus.php">ABOUT US</a>

        <?php
        //nese perdoruesi nuk eshte kycur ne sistem
        if(!isset($_SESSION['email'])){
            echo '<a href="login.php"> LOG IN </a>
                 <a href="signup.php"> SIGN UP </a>';
        }

        //nese perdoruesi eshte kycur ne sistem
        else {
            if(isset($_SESSION['roli'])){
                //administrator
                if($_SESSION['roli'] == 1){
                    echo '<a href="contact.php"> CONTACT </a>';
                }

                //klient
                else if($_SESSION['roli'] == 2){
                    echo '<a href="gallery.php">GALLERY</a>
                          <a href="book.php"> BOOK </a>
                          <a href="contact.php"> CONTACT US </a>';
                }
            }
            echo '<a href = "includes/validate/logout.php"> LOG OUT </a>';
        }
        ?>
    </div>

  <center>
  <section class="aboutus" id="aboutus">

    <h1 class="heading">
        <span>A</span>
        <span>B</span>
        <span>O</span>
        <span>U</span>
        <span>T</span>
        <span class="space"></span>
        <span>U</span>
        <span>S</span>
    </h1>

   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
      <div class="carousel-item active">
      <img class="d-block w-100" src="images/travel6.jpeg" alt="First slide">
      </div>
     </div>
   </div>

   <h1 class="heading">
        <span>W</span>
        <span>H</span>
        <span>O</span>
        <span class="space"></span>
        <span>W</span>
        <span>E</span>
        <span class="space"></span>
        <span>A</span>
        <span>R</span>
        <span>E</span>
    </h1>
      
       <p class="p3"> We are travelers and technologists. We work across time zones, hemispheres, cultures and languages. We’re used to breaking things down and building them back up again, until they’re even better. 
       <br>
        We know travel can be hard, but we also know that it’s worth it, every time. And because we believe travel is a force for good, we take our roles seriously. We’re here to build great products, and facilitate connections between travelers and our partners that truly bring good into the world. </p>
      
    <h1 class="heading">
        <span>W</span>
        <span>H</span>
        <span>A</span>
        <span>T</span>
        <span class="space"></span>
        <span>W</span>
        <span>E</span>
        <span class="space"></span>
        <span>D</span>
        <span>O</span>
    </h1>

       <p class="p3"> We build connections. We leverage our platform and technology capabilities across an extensive portfolio of businesses and brands to orchestrate the movement of people and the delivery of travel experiences on both a local and global basis. 
        <br>
        We help our travelers and our partners find the right pathways  through millions of possibilities to reach the best possible outcome. 
        <br> If you have any questions, <a href="contact.php" class="btn"> contact us.</a> </p>

    <!-- Pictures -->
    <section id="pictures">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <img src="images/travel1.jpeg" class="img-fluid" alt="Responsive image">
         </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <img src="images/travel3.jpeg" class="img-fluid" alt="Responsive image">
     </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <img src="images/travel4.jpeg" class="img-fluid" alt="Responsive image">
             </div>
           </div>
        </section>
    </section>

      <p class="p2"> No matter who you are, or where you are going, our travel brands help every type of traveler not only find the trip that’s right for them, but get the best value every time. </p>
      
       <p class="p2"> When we power more travel, we unleash more opportunities to strengthen connections, broaden horizons and bridge divides.
       <br>
      Our mission is to power global travel for everyone, everywhere. </p>

</center>
<br>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Js file link -->
<script src="javascript/script.js"></script>
    
<?php include "includes/template/footer.php";?>
    
    </body>
</html>