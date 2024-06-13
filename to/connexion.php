<?php

$sName= "localhost";
$uName= "root" ;
$pass= "";
$db_name= "to-do-list";

try{
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",
                     $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté :";
    }catch(PDOException $e){
    echo "La connexion à échoué :". $e->getMessage();
} 