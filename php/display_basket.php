<?php 
session_start();
require 'config.php';

$ele = $_SESSION['user_id'];

   
/* AFFICHAGE */
   $select = "SELECT * FROM panier WHERE user_id='$ele'";

$sqli = mysqli_query($connect,$select);
if (mysqli_num_rows($sqli) > 0) {

    while ($el = mysqli_fetch_assoc($sqli)) {
        $mm = $el['id_book'];
        $sqlit = "SELECT * FROM book WHERE book_id='$mm'";
        $sqlite = mysqli_query($connect,$sqlit);
        $row = mysqli_fetch_assoc($sqlite);
        echo '<div class="basket_element"><span>1</span><img src="../book_img/'.$row['img'].'" alt=""><p>'.$row['title'].'</p><i>'.$row['price'].'fr</i><button class="bx bx-x"></button></div>';
      
    }
      
}




?>