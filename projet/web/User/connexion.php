<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Simplon Charleville- Formulaire pour ajouter un utilisateur</title>
</head>
<!-- bootstrap Style CSS File -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- Custom Style CSS File -->
<link rel="stylesheet" type="text/css" href="../css/custom-style.css">
<!-- Font-Awesome Style CSS File -->
<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    
<body>

<!-- Top navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container">
		  <a class="navbar-brand" href="index.php"><strong>SIMPLON CHARLEVILLE</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      
              
		      
		      <li class="nav-item">
		        <a class="nav-link" href="../index.php">ACCUEIL</a>
					</li>
					<li class="nav-item">
		        <a class="nav-link" href="connexion.php">Connexion</a>
                <li class="nav-item active">
		        <a class="nav-link" href="indexFormUser.php">Créer un compte</a>
		      </li>
		      </li>
		    </ul>
		  </div>	
	</div>
</nav>

<!-- Intro Seven -->
<section class="intro intro-small2 intro-bg bg-overlay-light parallax">
	<div class="caption-container p-5">
		<div class="intro-caption text-center mt-5">
			<h1 class="display-4 text-white mb-2">CONNEXION</h1>
            <form action="verifSession.php" method="post" name="login">
            
            <p><?php if(isset($_GET['error'])){echo $_GET['error'];}?></p>
                <input type="text" name="mail" placeholder="Votre email"> <br>
                <input type="password" name="password" placeholder="Votre mot de passe"> <br>
                
                
                <input type="submit" class="button" name="login" value="Se connecter">
                <p>Pas encore de compte? <a href="FormUser.php">"Clique ici"</a></p>
                <p><a href="../index.php">Retour au sommaire</a></p>
            </form>
		</div>
	</div>
</section>


<body>




<?php if(isset($_GET['error'])){echo $_GET['error'];}?>


   

    <script  src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/core.js"></script>
</body>
</html>
