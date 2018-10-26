
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
			<h1 class="display-4 text-white mb-2">1ere PROMO</h1>
		</div>
	</div>
</section>


<body>

<h1>Inscription</h1>

<p><a href="../index.php">Retour au sommaire</a></p>
<?php if(isset($_GET['error'])){echo $_GET['error'];}?>


    <form method="post" action="verifUser.php">
        <p><label for="">Nom :</label>
        <input type="text" name="name" id="name" value="<?php if(isset($_GET['name'])){echo $_GET['name'];}?>">
        </p>

        <p><label for="">Prénom :</label>
        <input type="text" name="firstname" id="firstname" value="<?php if(isset($_GET['firstname'])){echo $_GET['firstname'];}?>">
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
        <input type="text" name="age" id="age" value="<?php if(isset($_GET['age'])){echo $_GET['age'];}?>">
        </p>

        <p><label for="">Photo :</label>
        <input type="text" name="photo" id="photo" value="<?php if(isset($_GET['photo'])){echo $_GET['photo'];}?>"><input type="file" name="upload" id="uploadPc" class="inputFilePc"
        </p>

        <p><label for="">Citation :</label>
        <input type="text" name="citation" id="citation" value="<?php if(isset($_GET['citation'])){echo $_GET['citation'];}?>">
        </p>

        <p><label for="">Langage préféré :</label>
        <input type="text" name="language" id="language" value="<?php if(isset($_GET['language'])){echo $_GET['language'];}?>">
        </p>

        <p><label for="">Projet :</label>
        <textarea name="project" id="project" value="<?php if(isset($_GET['project'])){echo $_GET['project'];}?>"></textarea>
        </p>

        <input type="submit" value="Créer un compte">
    </form>
    <script  src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/core.js"></script>
</body>
</html>
