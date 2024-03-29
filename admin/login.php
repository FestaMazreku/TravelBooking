<?php
session_start();

if(!isset($_SESSION['email'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Admin Panel</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php
            $email = "";

            $errorGen = $errorEmail =$errorPassword= "";

            $email = $password = "";

            //kushti if ne kete rast do te plotesohet vetem pasi klikohet butoni Submit ne formen
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                //POST
                include 'src/validate/loginValidate.php';
            }
        ?>
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="carousel-control-next-icon" src="../public/admin.png" alt="">
                    </div>
                    <h5 class="mb-4 text-muted">Log in</h5>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php echo $email; ?>" required>
                            <?php echo "<span style='color: red'>$errorEmail<span>";?>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password" value="<?php echo $password; ?>" required>
                            <?php echo "<span style='color: red'>$errorPassword<span>";?>
                            <?php echo "<span style='color: red'>$errorGen<span>";?>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4" type="submit">Log in</button>
                    </form>
                    <p class="mb-2 text-muted">Forgot password? <a href="forgot-password.php">Reset</a></p>
                    <p class="mb-0 text-muted">Not a member? <a href="signup.php">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
}

else {
    //nese perdoruesi eshte i kyqur, atehere ridrejtoje ne faqen baze pas kyqjes
    header("Location: index.php");
}
?>
