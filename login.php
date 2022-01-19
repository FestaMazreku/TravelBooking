<?php //startimi i sesionit
session_start();

//nese perdoruesi nuk eshte kycur, atehere paraqitja kete pamje te kesaj web faqeje
if(!isset($_SESSION['email'])) {

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Log in </title>

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
          <h1>Log in</h1>
          	
          <?php
            $errorGen = $errorEmail = $errorPassword = "";
            $email = $password = "";
                                
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //POST
            include 'includes/validate/loginValidate.php';
            }
        ?>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
        <div class="txt_field">
        <input type="text" name="email" value="<?php echo $email; ?>">
          <label>Email</label>
        </div>
        <?php echo "<span class='error'>$errorEmail<span>";?>
        <div class="txt_field">
        <input type="password" name="password" value="<?php echo $password; ?>">
          <label>Password</label>
        </div>
         <?php echo "<span class='error'>$errorPassword<span>";?>
       <input type="submit" name="register" value="Log in"> 
        <?php echo "<span class='error'>$errorGen<span>";?>
        <div class="signup_link">
          Not a member?
        <a href="signup.php">Sign up</a>
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