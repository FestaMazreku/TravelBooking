<?php

//konektimi me db
$server = 'localhost:3307';
$user = 'root';
$password = '';
$dbName = 'travelbooking';

$connect = mysqli_connect($server,$user,$password,$dbName);

    $username = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

  //Kjo pjese na nevojitet te shikojme nese ekziston perdoruesi me email te njejte
  $queryEmail = mysqli_query($connect, "SELECT email FROM perdoruesi WHERE email='$email'");
  $countEmail = @mysqli_num_rows($queryEmail);

  $register = true;

    //errori i pergjithshem
    if(empty($username) && empty($surname) && empty($email) && empty($password_1) && empty($password_2)){
	   $errorGen = "All fields are required!";
	   $register = false;
   }

    //nese te pakten njera nga fushat permban nje vlere perkatese, na nevojitet ta validojme ate vlere
    //nese fusha e emrit eshte e zbrazet
    else {
	   if(empty($username)){
		$errorName = "Name field is required!";
		$register = false;
	}
    
    //nese emri permban edhe karaktere tjera jo-shkronje
	else {
		if(!preg_match("/^[a-zA-Z ]*$/", $username)){
			$errorName = "The name must contain only letters!";
			$register = false;
		}
	}

    //nese fusha e mbiemrit eshte e zbrazet
	if(empty($surname)){
		$errorSurname = "Surname field is required!";
		$register = false;
	}
    
    //nese mbiemri permban edhe karaktere tjera jo-shkronje
    else {
		if(!preg_match("/^[a-zA-Z ]*$/", $surname)){
			$errorSurname =  "The surname must contain only letters!";
			$register = false;
        }
    }
    
	//nese fusha e email adreses eshte e zbrazet
	if(empty($email)) {
		$errorEmail = "Email address field is required!";
		$register = false;
	}
    
	//email adresa ka vlere, validoje ate
	else {
		//nese formati i email adreses se shenuar nuk eshte i sakte
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errorEmail = "The email address format is incorrect!";
			$register = false;
		}
        
		//nese ekziston nje perdorues qe e ka kete email adrese
		else if($countEmail != 0){
			$errorEmail = "This user doesn't exist!";
			$register = false;
		}
	}
    
	if(empty($password_1)){
		$errorPassword1 = "Password field is required!";
		$register = false;
	}

	//fjalekalimi ka vlere, validoje ate
	else {
		$uppercase = preg_match("@[A-Z]@", $password_1);
		$lowercase = preg_match("@[a-z]@", $password_1);
		$number = preg_match("@[0-9]@", $password_1);

     //nese fjalekalimi eshte i dobet
    //nese nuk plotesohet njeri nga kushtet e meposhtem atehere konsiderohet qe fjalekalimi eshte i dobet
     if(!$uppercase || !$lowercase || !$number || strlen($password_1) < 6){
        $errorPassword1 = "Weak password!";
    	$errorPassTooltip = "Password must contain at least 6 characters, one capital letter and a number!";
        $register = false;
		}
	}
    
    if($password_1 != $password_2)
    {
        $errorPassword2 ="The confirm password field must be the same as the password field!";
        $register=false;
    }

    if($register == true){

		//tani jemi gati te insertojme perdoruesin e ri ne db
		//ne rastin tone do te bejme nje insertim
		$querysql = "INSERT INTO perdoruesi
			(emri, mbiemri, email, password, roli)
			VALUES ('$username', '$surname', '$email', '$password_1', 2);";

		//funksioni ne vazhdim perdoret per te ekzekutuar deklarata te shumta te sql query ne mysql
		if (mysqli_multi_query($connect, $querysql)){
			header("Location: login.php");

		}
        
		else {
            echo '<script type="text/javascript">';
            echo 'alert("Ka ndodhur nje gabim ne insertim!")';  
            echo '</script>';
	      }
	  }
   }
?>