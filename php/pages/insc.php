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
    <title>Login</title>
</head>
<body>
    <section class="formul">
        <form class="form" action="./inscript.php" method="POST">
            <h2 class="login-title">Registration</h2>
            <div class="us">
                <input type="text" class="user" placeholder="Username" name="pseudo" id="un" required pattern="^[A-aZ-zÀ-ÿ0-9'-]+$">
            </div>
            <div class="eml">
                <input type="email" class="mail" placeholder="Email" name="email" id="em" required pattern="^[A-Za-z0-9'_.-]+@{1}[A-Za-z0-9]+.[A-Za-z]{2,}$">
            </div>
            <div class="ps">
                <input type="password" class="pass" placeholder="Password" name="motdepasse" id="pw" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}$">
            </div>
            <div class="psc">
                <input type="password" class="passconfirm" placeholder="Confirm" name="mdpconf" id="pwc" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}$">
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Ok" class="send">
            </div>
            <a class="redirection" href="./login.php">Se connecter</a>
        </form>
    </section>
    
    <section class="message-erreur">
        <?php
            if(isset($_GET['reg_err'])){
                $e = $_GET['reg_err'];
                if($e == 1){
                    echo 'Pseudo ou Email déjà existant';
                }elseif($e == 2){
                    echo 'Mot de passe incorrect';
                }
            }
        ?>
    </section>

</body>
</html>