<?php

$serv = 'localhost';
$user = '';
$pass = '';
$bdd = 'folio';

try{
    $pdo = new PDO('mysql:host=$serv;dbname=$bdd;charset=utf8', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $e){
    echo 'Erreur ' . $e;
}

?>