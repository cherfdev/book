<?php 
session_start();
if (isset($_SESSION['user_id'])) {
    require 'detail2.php';
}else {
    require 'detail1.php';
}
?>