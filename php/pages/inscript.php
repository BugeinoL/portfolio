<?php 
session_start();
require './functions.php';

if(!empty($_POST['email']) && !empty($_POST['pseudo'])){
    $em = $_POST['email'];
    $us = $_POST['pseudo'];
    require './bdd.php';
    $checkmail = $pdo->prepare("SELECT * FROM log WHERE email = ? OR username = ?");
    $checkmail->bindParam(1, $em);
    $checkmail->bindParam(2, $us);
    $checkmail->execute();
    $datam = $checkmail->fetch(PDO::FETCH_OBJ);
    if($datam){
        header('location:./insc.php?reg_err=1');
        }else{
            if(!empty($_POST['pseudo']) && !empty($_POST['email'])){
                function cleandata($data){
                    $data =  trim($data);
                    $data =  stripslashes($data);
                    $data =  htmlspecialchars($data);
                    return $data;
                }
                $usname = cleandata($_POST['pseudo']);
                $mail = cleandata($_POST['email']);
            }
            if(!empty($_POST['motdepasse']) && !empty($_POST['mdpconf']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST['motdepasse']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST['mdpconf']) && $_POST['motdepasse'] === $_POST['mdpconf']){
                $pass = $_POST["motdepasse"];
                $hashed = password_hash($pass, PASSWORD_BCRYPT);
                if(!empty($_POST) && !empty($hashed) && !empty($usname) && !empty($mail)){
                    try{
                        require_once './bdd.php';
                        $req = $pdo->prepare("INSERT INTO log(username, password, email, conftoken) VALUES(:username, :password, :email, :conftoken)");
                        $tok = token(60);
                        $req->bindParam(':username', $usname);
                        $req->bindParam(':password', $hashed);
                        $req->bindParam(':email', $mail);
                        $req->bindParam(':conftoken', $tok);
                        $req->execute();
                    }catch(PDOException $e){
                        echo "Erreur : " . $e;
                    }finally{
                        $usid = $pdo->lastInsertId();
                        $pdo = null;
                        echo "Raté";
                        header("location:./confirm.php?id=" .$usid . "&token=" . $tok);
                    }
                    if(!empty($_POST['email'])){
                        require_once './bdd.php';
                        $destinataire = "lenaingudule@gmail.com";
                        $headers = 'charset-utf8';
                        $to = 'lenaingudule@gmail.com';
                        $subject = 'Validation';
                        $message = 'Confirmation email';
                        mail($to, $subject, $message, $headers);
                    }else{
                        echo "Veuillez renseigner votre email";
                    }
                }else{
                    header("location:./login.php?reg_failed");
                }
            }else{
                header('location:./insc.php?reg_err=2');
            }
        }
}
?>