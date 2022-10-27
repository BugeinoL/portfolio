<?php
if(!empty($_POST['pseudo'])){
    function cleandata($data){
        $data =  trim($data);
        $data =  stripslashes($data);
        $data =  htmlspecialchars($data);
        return $data;
    }
    $pseudo = cleandata($_POST['pseudo']);
}else{
    echo 'C\'est vide';
}
if(!empty($_POST['motdepasse']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?$/\=*.-]).{6,18}#' , $_POST['motdepasse']) && !empty($pseudo)){
    try{
        require_once './bdd.php';
        $req = $pdo->prepare('SELECT * FROM log WHERE tokenconfirmed IS NOT NULL AND username = :use');
        $req->bindParam(':use', $pseudo);
        $req->execute();
        $userdata = $req->fetch(PDO::FETCH_OBJ);
    }catch(PDOException $e){
        echo 'Erreur : ' . $e;
    }finally{
        if(!empty($userdata) && password_verify($_POST['motdepasse'], $userdata->password)){
            session_start();
            $_SESSION['auth'] = $userdata->username;
            //header('location:/portfolio/index.php');
        }else{
            header('location:./login.php?log_err=1');
        }
    }
}else{
    header('location:./login.php?log_err=2');
}

?>