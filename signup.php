<?php //startimi i sesionit
session_start();

//nese perdoruesi nuk eshte kycur, atehere paraqitja kete pamje te kesaj web faqeje
if(!isset($_SESSION['email'])){

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign up </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Logo -->
    <link rel='shortcut icon' type='image/x-icon' href='images/travel.png'/>

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- Css file link -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
<?php include "includes/template/nav.php";?>

    <div class="center"> 
      <h1>Sign up</h1>
        <?php
            $errorGen = $errorName = $errorSurname = $errorEmail = $errorPassword1 = $errorPassword2 = $errorPassTooltip= "";
            $username = $surname = $email = $password_1 = $password_2 ="";

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //POST

            include 'server.php';
            }
        ?>

      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">   
        <div class="txt_field">
        <input type="text" name="name" value="<?php echo $username; ?>">
          <label>Name</label>
        </div>
         <?php echo "<span class='error'>$errorName<span>";?>
        <div class="txt_field">
        <input type="text" name="surname" value="<?php echo $surname; ?>">
          <label>Surname</label>
        </div>
        <?php echo "<span class='error'>$errorSurname<span>";?>        
          <div class="txt_field">
        <input type="text" name="email" value="<?php echo $email; ?>">
          <label>Email</label>
        </div>
        <?php echo "<span class='error'>$errorEmail<span>";?>
        <div class="txt_field">
        <input type="password" name="password_1" value="<?php echo $password_1; ?>">
          <label>Password</label>
        </div>
         <?php echo "<span class='error'>$errorPassword1<span>";
               echo "<br><span class='error'>$errorPassTooltip<span>";?>
        <div class="txt_field">
        <input type="password" name="password_2" value="<?php echo $password_2; ?>">
          <label>Confirm Password</label>
        </div>
            <?php echo "<span class='error'>$errorPassword2<span>";?>
         <input type="submit" name="signup" value="Sign up"> 
            <?php echo "<span class='error'>$errorGen<span>";?>
        <div class="signup_link">
          Already a member?
            <a href="login.php">Log in</a>
        </div>
      </form>
    </div>
 
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Js file link -->
<script src="javascript/script.js"></script>
    
    </body>
</html>
<?php
}

else {
	//nese perdoruesi eshte i kycur, atehere ridrejtoje ne faqen baze pas kycjes
	header("Location: index.php");
}
?>