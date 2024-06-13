<?php 

session_start();
require 'config.php';

$email = mysqli_real_escape_string($connect,$_POST['email']);
$pswd = mysqli_real_escape_string($connect,$_POST['pswd']);


$sqli = mysqli_query($connect,"SELECT * FROM users Where email = '$email'");

if (mysqli_num_rows($sqli) > 0) {
    $row = mysqli_fetch_assoc($sqli);
    $var = $row['password'];
    $pswd = md5($pswd);
    if ($pswd === $var) {
        $_SESSION['user_id']=$row['user_id'];

        echo "success";

    }else {
        echo "connection failed";
    }
}


?>