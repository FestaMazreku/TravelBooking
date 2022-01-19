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
    <title>Sign up | Admin Panel</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php
        $errorGen = $errorName = $errorSurname = $errorEmail = $errorPassword1 = $errorPassword2 = $errorPassTooltip= "";
        $username = $surname = $email = $password_1 = $password_2 ="";

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //POST

            include 'validate/SignUpValidate.php';
        }
        ?>

        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="carousel-control-next-icon" src="../public/admin.png" alt="">
                    </div>
                    <h5 class="mb-4 text-muted">Sign up</h5>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="mb-3 text-start">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter your name" value="<?php echo $username; ?>" required>
                        </div>
                        <?php echo "<span class='error'>$errorName<span>";?>
                        <div class="mb-3 text-start">
                            <label for="name" class="form-label">Surname</label>
                            <input type="text" name="surname" class="form-control" placeholder="Enter your surname" value="<?php echo $surname; ?>" required>
                        </div>
                        <?php echo "<span class='error'>$errorSurname<span>";?>
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email address" value="<?php echo $email;?>" required>
                        </div>
                        <?php echo "<span class='error'>$errorEmail<span>";?>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password_1" class="form-control" placeholder="Enter your password" value="<?php echo $password_1;?>">
                            <?php echo "<span style='color: red;'>$errorPassword1<span>";?>
                            <?php echo "<span style='color: red;'>$errorPassTooltip<span>";?>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Confirm Password</label>
                            </label>
                            <input type="password" class="form-control" name="password_2" placeholder="Enter your password again" value="<?php echo $password_2; ?>">
                            <br />
                            <?php echo "<span style='color: red;'>$errorPassword2<span>";?>
                            <?php echo "<span style='color: red'>$errorGen<span>";?>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4" type="submit">Sign up</button>
                    </form>
                    <p class="mb-0 text-muted">Already a member? <a href="login.php">Log in</a></p>
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