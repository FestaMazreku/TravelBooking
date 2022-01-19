<?php
session_start();


$message = '';

if(isset($_POST["send"]))
{
    $email = $_SESSION['email'];
    $message = '
		<h3 align="center">Programmer Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
			
            <tr>
				<td width="30%">Email</td>
				<td width="70%">'.$email.'</td>
			</tr>
            
			<tr>
				<td width="30%">Title</td>
				<td width="70%">'.$_POST["title"].'</td>
			</tr>
              
			<tr>
				<td width="30%">Message</td>
				<td width="70%">'.$_POST["message"].'</td>
			</tr>
			  
		</table>
	';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact </title>

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
    
<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>T</span>
        <span>A</span>
        <span>C</span>
        <span>T</span>
        <span class="space"></span>
        <span>U</span>
        <span>S</span>
    </h1>
    
  <center>
      <img src="images/contactus.jpeg" alt="" class="responsive">
      <br>
      <div class="contact">
          <p class="p4">
    Address: New York, NY 10012, US
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>  <br>
    Email: travelocity@gmail.com
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
    class="bi bi-envelope-fill" viewBox="0 0 16 16">
    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/></svg> <br>
    Telephone: + 01 234 567 88   
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"  
    class="bi bi-telephone-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
          </p>
      </div>
  </center>
    <br>

   <!-- Message -->
    <h1 class="heading">
        <span>M</span>
        <span>E</span>
        <span>S</span>
        <span>S</span>
        <span>A</span>
        <span>G</span>
        <span>E</span>
    </h1>

    <div class="row">
        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form method="post">
            <div class="inputBox">
                <input type="text" placeholder="Title" name="title">
            </div>
            <textarea placeholder="Message" name="message" cols="30" rows="10"></textarea>
            <div class="send">
                <input type="submit" class="btn" name="send" value="Send">
            </div>
        </form>
    </div>  
</section>

<!-- Map -->
<center>
    <section id="contact" class="py-5">
        <h1 class="location"> OUR LOCATION
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
        </h1>
        <br>
        <div class="row">
            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=new york &amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.embedmymap.com/">Embed My Map</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
        </div>
    </section>
  </center>

<!-- contact section ends --> 

<?php include "includes/template/footer.php";?>

<?php
$conn=mysqli_connect("localhost: 3307","root","","travelbooking");
mysqli_select_db($conn,'travelbooking');

$email = $_SESSION['email'];
$errors = array();

if(isset($_POST['send'])){

    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);

    if (empty($title)){
        array_push($errors, "Title is required");
    }


    if (empty($message)){
        array_push($errors, "Message is required");
    }

    $query = "SELECT * FROM inbox WHERE title='$title' OR message='$message' LIMIT 1";

    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
    // if user exists
    if ($user)
    {

        if ($user['message'] === $message)
        {
            array_push($errors, "The message has been sent successfully!");
        }
    }

    if (count($errors) == 0){

        $regist ="INSERT INTO inbox (email, title, message)
              VALUES ('$email', '$title','$message')";

        $rows = "SELECT * FROM inbox WHERE email='$email' AND message='$message'";

        $run = mysqli_query($conn, $rows);

        if(mysqli_num_rows($run)<10){

            mysqli_query($conn,$regist);

            echo "<script>alert('The message has been sent successfully!');</script>";

        }
    }
}
?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Js file link -->
<script src="javascript/script.js"></script>
    </body>
</html>