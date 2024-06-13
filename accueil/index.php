<?php
session_start();
if (isset($_SESSION['user_id'])) {
    require 'index2.php';

}else {
    require 'index1.php';
}
?>