<?php
session_start();
$alert ='';

if(isset($_POST['valider'])){
    if(!empty($_POST['username']) AND !empty($_POST['pwd'])){
        $default_username = "admin";
        $default_pwd = "admin1234";
        $username_enter = htmlspecialchars($_POST['username']);
        $pwd_enter = htmlspecialchars($_POST['pwd']);
        if($username_enter == $default_username AND $pwd_enter == $default_pwd){
            $_SESSION['connected'] = True;
            header('Location: insert-post.php');
        }else{
            $alert = "password or username is not valable";
        }
    }else{
        $alert = "write some things";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-with, inital-scale=1.0">
    <!--font familly fonts.google.com-->
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&family=Syne+Mono&display=swap" rel="stylesheet">
    <!--icons fontawesome.com-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!--Lien fichers css et autre-->
    <link rel="icon" type="image/png" href="../assets/Logos/logomedy.png">
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/base.css">
    <link rel="stylesheet" href="../CSS/admin-login.css">
    <title>Adiministration</title>
</head>
<body>
    <form method="post" action="">
        <h1>Portail Admin</h1>
        <hr>
        <div class="inputs">
        <h2 class="alert"><?php echo $alert; ?></h2>
            <input type="text" name="username" placeholder="Username" autocomplete="off" required="">
            <input type="password" name="pwd" placeholder="Password" required>
        </div>
        <div align="center">
            <button type="submit" name="valider">Se connecter</button>
        </div>
    </form>
</body>
</html>