

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulaire pour ajouter un utilisateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    
</head>
<body>

<h1>Inscription</h1>

<p><a href="../accueil.php">Retour au sommaire</a></p>
<?php if(isset($_GET['error'])){echo $_GET['error'];}?>


    <form method="post" action="verifUser.php">
        <p><label for="">Nom :</label>
        <input type="text" name="name" id="name" value="<?php if(isset($_GET['pseudo'])){echo $_GET['pseudo'];}?>">
        </p>

        <p><label for="">Prénom :</label>
        <input type="text" name="firstname" id="firstname" value="<?php if(isset($_GET['pseudo'])){echo $_GET['pseudo'];}?>">
        </p>

        <p><label for="">Mot de passe :</label>
        <input type="password" name="motDePasse" id="password" value="<?php if(isset($_GET['mdp'])){echo $_GET['mdp'];}?>"> 
        </p>

        <p><label for="">Verification du mot de passe :</label>
        <input type="password" name="verifMotDePasse" id="passwordbis" value="<?php if(isset($_GET['verifpass'])){echo $_GET['verifpass'];}?>">  
        </p>

        <p><label for="">Email :</label>
        <input type="email" name="mail" id="mail" value="<?php if(isset($_GET['mail'])){echo $_GET['mail'];}?>">
        </p>

        <p><label for="">Age :</label>
        <input type="text" name="age" id="age" value="<?php if(isset($_GET['pseudo'])){echo $_GET['pseudo'];}?>">
        </p>

        <p><label for="">Photo :</label>
        <input type="text" name="photo" id="photo" value="<?php if(isset($_GET['pseudo'])){echo $_GET['pseudo'];}?>">
        </p>

        <p><label for="">Citation :</label>
        <input type="text" name="citation" id="citation" value="<?php if(isset($_GET['pseudo'])){echo $_GET['pseudo'];}?>">
        </p>

        <p><label for="">Langage préféré :</label>
        <input type="text" name="language" id="language" value="<?php if(isset($_GET['pseudo'])){echo $_GET['pseudo'];}?>">
        </p>

        <p><label for="">Projet :</label>
        <textarea name="project" id="project" value="<?php if(isset($_GET['pseudo'])){echo $_GET['pseudo'];}?>"></textarea>
        </p>
        
        <input type="submit" value="Créer un compte">
    </form>
</body>
</html>
