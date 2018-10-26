
<!DOCTYPE html>
<html>
<head>
	<title>Simplon Charleville- Formulaire pour ajouter un utilisateur</title>
</head>
<!-- bootstrap Style CSS File -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- Custom Style CSS File -->
<link rel="stylesheet" type="text/css" href="../css/custom-style.css">
<!-- Font-Awesome Style CSS File -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
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
<section class="intro intro-small intro-bg bg-overlay-light parallax">
	<div class="caption-container p-5">
		<div class="intro-caption text-center mt-5">
			<h1 class="display-4 text-white mb-2">INSCRIPTION</h1>
      <form method="post" action="verifUser.php">
      <div>

        <p>
       <input type="text" name="name" id="name" placeholder="Nom" size="40" value="<?php if(isset($_GET['name'])){echo $_GET['name'];}?>"> 

       </p>
        
        <p>
        <input type="text" name="firstname" id="firstname" placeholder="Prénom" size="40" value="<?php if(isset($_GET['firstname'])){echo $_GET['firstname'];}?>">
        </p>
       
        

        <p>
        <input type="password" name="motDePasse" id="password" placeholder="Mot de passe" size="40" value="<?php if(isset($_GET['mdp'])){echo $_GET['mdp'];}?>"> 
        </p>

        <p>
        <input type="password" name="verifMotDePasse" id="passwordbis" placeholder="Confirmez le mot de passe" size="40" value="<?php if(isset($_GET['verifpass'])){echo $_GET['verifpass'];}?>">  
        </p>

        <p>
        <input type="email" name="mail" id="mail" placeholder="Email" size="40" value="<?php if(isset($_GET['mail'])){echo $_GET['mail'];}?>">
        </p>

        <p>
        <input type="text" name="age" id="age" placeholder="Age" size="40" value="<?php if(isset($_GET['age'])){echo $_GET['age'];}?>">
        </p>

        <p>
        <input type="text" name="photo" id="photo" placeholder="Photo" size="40" value="<?php if(isset($_GET['photo'])){echo $_GET['photo'];}?>">
        </p>

        <p>
        <input type="text" name="citation" id="citation" placeholder="Citation" size="40" value="<?php if(isset($_GET['citation'])){echo $_GET['citation'];}?>">
        </p>

        <p>
        <input type="text" name="language" id="language" placeholder="Langage preféré" size="40" value="<?php if(isset($_GET['language'])){echo $_GET['language'];}?>">
        </p>

        <p>
        <textarea name="project" id="project" placeholder="Projet" rows="4" cols="40" value="<?php if(isset($_GET['project'])){echo $_GET['project'];}?>"></textarea>
        </p>
      
        
        <input type="submit" value="Créer un compte">
    </form>
		</div>
	</div>
</section>


<body>

<p><a href="../index.php">Retour au sommaire</a></p>
<?php if(isset($_GET['error'])){echo $_GET['error'];}?>


    
    <script  src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/core.js"></script>
</body>
</html>
