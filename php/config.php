<?php 
$connect = mysqli_connect("localhost","root","","projecttable");
if (!$connect) {
    echo mysqli_connect_error();
}
?>