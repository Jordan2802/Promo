<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/conexion.css">
    <title>Document</title>
</head>

<body>
    <h1>Connexion</h1>
    <div class="formCo">
        <form action="verifSession.php" method="post" name="login">
            
        <p><?php if(isset($_GET['error'])){echo $_GET['error'];}?></p>
            <input type="text" name="mail" placeholder="Votre email"> <br>
            <input type="password" name="password" placeholder="Votre mot de passe"> <br>
            
            
            <input type="submit" class="button" name="login" value="Se connecter">
            <p>Pas encore de compte? <a href="FormUser.php">"Clique ici"</a></p>
        </form>
        

    </div>

</body>

</html>
