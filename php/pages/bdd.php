<?php

$host = 'localhost';
$db = 'pfolio';
$user = 'root';
$pass = '';

try{
    $pdo = new PDO('mysql:host=localhost;dbname=pfolio;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $e){
    echo 'Erreur' . $e;
}
?>