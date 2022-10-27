<?php

//use JetBrains\PhpStorm\Internal\ReturnTypeContract;

function token($length){
    $alph = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789";
    $token = substr(str_shuffle(str_repeat($alph, $length)),0, $length);
    return $token;
}

function logged_only(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
        header('location:./login.php');
    }
    if($_SESSION['auth']==true){

    }elseif($_SESSION['auth']==false)
        echo "Sad";
    if(!isset($_SESSION['auth'])){
        $_SESSION['flash']['danger'] = "Vous n'avez pas les doits suffisants pour accèder à cette page";
         exit();
    }
    
}

?>