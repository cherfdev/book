<?php

session_start();

require 'config.php';
date_default_timezone_set('Etc/GMT-1');
$moment = date("d/m/Y H:i");
$user_id = rand(1,100000);

$name = mysqli_real_escape_string($connect,$_POST['name']);
$prenom = mysqli_real_escape_string($connect,$_POST['prenom']);
$email = mysqli_real_escape_string($connect,$_POST['email']);
$pswd = mysqli_real_escape_string($connect,$_POST['pswd']);
if (isset($_FILES['photo'])) {
    $photo = $_FILES['photo']['name'];
    $tmp_li = $_FILES['photo']['tmp_name'];
    $photo = rand(1,100000).$photo;
    move_uploaded_file($tmp_li,"../user_img/".$photo);
    $pswd = md5($pswd);

 $sentelement = "INSERT INTO users(fname, lname, email, password, login_date, user_id, img) VALUES (
    '$name', '$prenom', '$email', '$pswd', '$moment','$user_id','$photo')";

$sqli = mysqli_query($connect, $sentelement);

if (!$sqli) {
    echo"problème";
}else{
    echo"ok";
    $_SESSION['user_id'] = $user_id;
    // header("location: index.php");
}
}



?>