<?php session_start();

//on appelle les classes qui vont nous servir

require_once '../../src/App/Manager/UserManager.php';
require_once '../../src/App/Entity/User.php';

//on indique l'espace de nom des classes utilisées

use App\Entity\User;
use App\Manager\UserManager;

//recuperer les utilisateurs


$userManager = new UserManager();
$users = $userManager->read($_POST['iduser']);
var_dump("<pre>");
var_dump($users);
var_dump("</pre>");
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
</head>
<body>
    



</body>
</html>
