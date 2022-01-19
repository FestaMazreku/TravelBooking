<?php

$roli = $_POST['roli'];
$r_pershkrimi = $_POST['r_pershkrimi'];

require "../database/connect.php";

$addR_pershkrimi = true;

if(empty($roli) && empty($r_pershkrimi)) {
    $errorGen = "Fields are required!";
    $addR_pershkrimi = false;
}

else {
    if(empty($roli)) {
        $errorRoli= "ID field is required!";
        $addR_pershkrimi = false;
    }
    else {
        $number = preg_match("@[0-9]@", $roli);
        if(!$number) {
            $errorRoli = "ID should be a number!";
            $addR_pershkrimi = false;
        }
    }

    if(empty($r_pershkrimi)) {
        $errorR_pershkrimi = "Role field is required!";
        $addR_pershkrimi = false;
    }

    if($addR_pershkrimi == true) {
        $querysql = "INSERT INTO roli(roli,r_pershkrimi) VALUES('$roli','$r_pershkrimi');";

        if (mysqli_multi_query($connect, $querysql)) {
            echo'<script> location.replace("roles.php"); </script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong!")';
            echo '</script>';
        }
    }
}
?>