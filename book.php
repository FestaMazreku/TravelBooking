<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Book </title>

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

<!-- packages section starts -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>B</span>
        <span>O</span>
        <span>O</span>
        <span>K</span>
        <span class="space"></span>
        <span>N</span>
        <span>O</span>
        <span>W</span>
    </h1>

        <center>
            <div class="box-container">
                <?php
                require "includes/functions/connect.php";
                $stmt = $connect->prepare("SELECT * FROM packages");
                $stmt->execute();
                $result = $stmt->get_result();

                while($row = $result->fetch_assoc()):
                ?>
                <div class="box col-lg-4">
                        <img src="<?= $row['fotografia']?>" alt="">
                        <div class="content">
                            <h4><i class="fas fa-map-marker-alt"><b><?= $row['emri']?></b></h4></i>
                            <p><?= $row['pershkrimi']?></p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="<?= $row['link']?>" target="_blank"> <i class="btn">Search</i></a>
                            <br>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
    </center>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Js file link -->
<script src="javascript/script.js"></script>

<?php include "includes/template/footer.php";?>

</body>
</html>