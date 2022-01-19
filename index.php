<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Travelocity </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Logo -->
    <link rel='shortcut icon' type='image/x-icon' href='images/travel.png'/>

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- Css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php include "includes/template/nav.php";?>

<!-- login form container  -->
    
 <div id="menu-bar" class="fas fa-bars"></div>
    
<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>
</div>
    
<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3 class="title">WELCOME!</h3>
        <p class="title">Discover new places, adventure awaits! 
        <br> Take the dream vacation you've been waiting for!</p>
        <a href="aboutus.php" class="btn">About us</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>S</span>
        <span>E</span>
        <span>R</span>
        <span>V</span>
        <span>I</span>
        <span>C</span>
        <span>E</span>
        <span>S</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>Affordable hotels</h3>
            <p> Looking for great cheap hotels? Don't worry! We have the best hotels for your trip! </p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Food and drinks</h3>
            <p> We are passionate about helping food travelers eat and drink better while traveling the world. </p>
        </div> 
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>Safety guide</h3>
            <p> Travel can be an exciting and eye-opening experience. It’s easy to get caught up in the thrill of adventure. But, don’t forget about travel security and safety considerations while you’re abroad! </p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>Around the world</h3>
            <p> Figuring out how to travel the world is no easy feat, especially when you’re trying to do it on a budget or planning world travel with a family.
            <br>
            To help you get started, we’ve put together a guide on how to travel the world, including everything from how to start looking into your trip to how to save money once you’re abroad. </p>
            <p> 1. Get prepared 
            <br>
                2. Book travel far in advance
            <br>
                3. Avoid hidden travel and communication fees
            
            </p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>Fastest travel</h3>
            <p> By booking a ticket online you can travel so much faster and easier! Take the dream vacation you've been waiting for! </p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>Adventures</h3>
            <p> By traveling the world you are going to experience a lot of adventures. So what are you waiting for? Book your plane ticket and go! Discover new places, adventure awaits!
              <br> <a href="book.php"> Book now! </a>
        </div>
     </div>
</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>G</span>
        <span>A</span>
        <span>L</span>
        <span>L</span>
        <span>E</span>
        <span>R</span>
        <span>Y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Destinations travelers love</p>
                <a href="gallery.php" class="btn">See more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Destinations travelers love</p>
                <a href="gallery.php" class="btn">See more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Destinations travelers love</p>
                <a href="gallery.php" class="btn">See more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Destinations travelers love</p>
                <a href="gallery.php" class="btn">See more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Destinations travelers love</p>
                <a href="gallery.php" class="btn">See more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Destinations travelers love</p>
                <a href="gallery.php" class="btn">See more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Destinations travelers love</p>
                <a href="gallery.php" class="btn">See more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Destinations travelers love</p>
                <a href="gallery.php" class="btn">See more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>Amazing places</h3>
                <p>Destinations travelers love</p>
                <a href="gallery.php" class="btn">See more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>R</span>
        <span>E</span>
        <span>V</span>
        <span>I</span>
        <span>E</span>
        <span>W</span>
        <span>S</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.png" alt="">
                    <h3> Laura Jackson </h3>
                    <p>I have booked my holiday with your company for five times now and I have to say what a pleasure it is to do business with your company , nothing is a hassle... 
                 <br> I’m about to book my next holiday with you!
                <br> Thank you for making our holiday great! Amazing service and such a good price, can’t recommend your company enough!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.png" alt="">
                    <h3> John Lewis </h3>
                    <p>Great booking experience. Always had very positive experiences with traveling online. All the bookings were great and I'm very happy to use this company. Your service was great and we will be recommending your company to our friends for their future travel! <br> Thank you!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.png" alt="">
                    <h3> Jessica Beckman </h3>
                    <p> Traveling online has some amazing deals and it was so easy to book and use the service. Everything was looked after for me and took away the worry and stress of booking things. I will highly recommend this service to my family and friends and I will be using them again!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.png" alt="">
                    <h3> Daniel Pearce </h3>
                    <p>Very professional and responsive just by sitting across the desk! Thank you for enabling us to have an easygoing experience in planning the trip and for following up!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
                 <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic5.jpg" alt="">
                    <h3> Rebecca Adams </h3>
                    <p>I was not sure about booking with you, however I was pleasantly surprised! Everytime I called or emailed your office, my questions were answered and I had complete peace of mind. I would definitely recommend you to my friends. Thanks for an amazing holiday!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
                 <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic6.jpg" alt="">
                    <h3> James Miller </h3>
                    <p>It's such an easy website to use! You can customise your holiday however you want. Easy to contact the travel agent if you had any questions. Good prices. Would use again!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- review section ends -->
    
<!-- blog section starts  -->
    
    <center>
        <section class="blogs" id="blogs">

       <h1 class="heading">  <span> BLOGS </span> </h1>

        <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image" height="200px" width="200px">
                <img src="images/blog-1.svg" alt="">
            </div>
              <div class="content">
                <h3>Have a vacation with your friends!</h3>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image" height="200px" width="200px">
                <img src="images/blog-2.svg" alt="">
            </div>
              <div class="content">
                <h3>Go camping with your friends!</h3>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image" height="200px" width="200px">
                <img src="images/blog-3.svg" alt="">
            </div>
            <div class="content">
                <h3>Go kayaking with your friends!</h3>
            </div>
          </div>
        </div>
      </section>
   </center>

<!-- blog section ends -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Js file link -->
<script src="javascript/script.js"></script>
    
<?php include "includes/template/footer.php";?>
    
    </body>
</html>