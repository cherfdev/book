<?php 
session_start();
if (isset($_SESSION['user_id'])) {
    require 'contact2.php';
}else {
    require 'contact1.php';
}
?>