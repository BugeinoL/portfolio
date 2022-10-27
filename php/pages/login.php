<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scss/login.css">
    <link rel="stylesheet" href="/../Fa/css/all.css">
    <title>Login</title>
</head>
<body>
    <section class="formul">
        <form class="form" action="./log.php" method="POST">
            <h2 class="login-title">Login</h2>
            <div class="us">
                <input type="text" class="user" placeholder="Username" name="pseudo" id="un" required pattern="^[A-aZ-zÀ-ÿ0-9'-]+$">
            </div>
            <div class="ps">
                <input type="password" class="pass" placeholder="Password" name="motdepasse" id="pw" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}$">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Ok" class="send">
            </div>
            <a class="redirection" href="./insc.php">S'inscrire</a>
        </form>
    </section>

    <section class="message-erreur">
            <?php
                if(isset($_GET['log_err'])){
                    $e = $_GET['log_err'];
                    if($e == 1){
                        echo 'Mauvais identifiant';
                    }elseif($e == 2){
                        echo 'Mauvais mot de passe';
                    }
                }
            ?>
    </section>


</body>
</html>