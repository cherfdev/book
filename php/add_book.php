<?php
session_start();

require 'config.php';

$random_id = rand(1,1000);
$title = mysqli_real_escape_string($connect,$_POST['title']);
$description = mysqli_real_escape_string($connect,$_POST['description']);
$autor = mysqli_real_escape_string($connect,$_POST['autor']);
$prix = mysqli_real_escape_string($connect,$_POST['price']);
$status = mysqli_real_escape_string($connect,$_POST['status']);
$category = mysqli_real_escape_string($connect,$_POST['category']);
if (isset($_FILES['photo'])) {
    $name_book = $_FILES['photo']['name'];
    $name_type = $_FILES['photo']['tmp_name'];
    $name_book = rand(1,100000).$name_book;

    move_uploaded_file($name_type,"../book_img/".$name_book);
    $sqk = mysqli_query($connect,"INSERT INTO book(book_id, img, title, description, autor, category, price, status) VALUES ('$random_id','$name_book','$title','$description','$autor','$category', '$prix', '$status')");
    if (($sqk)) {
        echo "succès";
    }else {
        echo "erreur";
    }

}

?>