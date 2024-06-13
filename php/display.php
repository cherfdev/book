<?php 
session_start();
require 'config.php';
$sql="SELECT * FROM book ORDER BY title ASC";

$sqli = mysqli_query($connect,$sql);
while ($row = mysqli_fetch_assoc($sqli)) { 
  $a = $row['book_id'];
$ess = "'".''.$a.''."'";

    echo '<div class="col-lg-4 col-md-6 align-self-center mb-30 mr-20px book-items col-md-6 adv" data-aos="fade-up" data-aos-duration="500"><a href="detail.php?id_book='.$row['book_id'].'"><img src="../book_img/'.$row['img'].'" alt=""></a><div class="status-doc"><h6>'.$row['status'].'</h6><h4>'.$row['price'].'fr</h4></div><h2>'.$row['title'].'</h2><p>'.$row['description'].'</p><button class="btn btn-danger" onclick="myfunction('.$ess.')">Emprunter</button></div>'; 
  }
?>