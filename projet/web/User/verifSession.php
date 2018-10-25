<?php

session_start();
//on appelle les classes qui vont nous servir

require_once '../../src/App/Manager/UserManager.php';
require_once '../../src/App/Entity/User.php';

//on indique l'espace de nom des classes utilisées


use App\Manager\UserManager;
$userManager = new UserManager();


$passW = $_POST["password"];
$mail = $_POST["mail"];



    $verifSession = $userManager->login($mail);
    $_SESSION['mail'] = $verifSession["mail"];
    
    $pass = password_verify($passW, $verifSession["password"]);
    if($pass){
        header('location: ../index.php');
    }else{
        $messageSession .= "l'utilisateur <b>".$pseudo."</b> ne correspond pas. Vérifiez votre émail et votre mot de passe. <br>";
        header('location: connexion.php?error='.$messageSession);
    }



