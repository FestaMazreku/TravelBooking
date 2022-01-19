<?php

//konektimi me db
$server = 'localhost:3307';
$user = 'root';
$password = '';
$dbName = 'travelbooking';

$connect = mysqli_connect($server,$user,$password,$dbName);

$roli = $_POST['roli'];
$r_pershkrimi = $_POST['newR_pershkrimi'];

$update = true;

if (empty($r_pershkrimi)) {
    $errorR_pershkrimi = "You should type a new role title!";
    $update = false;
}

else {
    if($update == true) {

        $updateQuery = "UPDATE roli set r_pershkrimi='$r_pershkrimi' where roli='$roli'";

        if(mysqli_query($connect, $updateQuery)) {
            echo '<script type="text/javascript">';
            echo 'alert("Role edited successfully!")';
            echo '</script>';

        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong!")';
            echo '</script>';
            echo '<script> location.replace("roles.php"); </script>';
        }

    }
}
?>