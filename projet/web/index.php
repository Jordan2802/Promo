<?php session_start();

//on appelle les classes qui vont nous servir

require_once '../src/App/Manager/UserManager.php';
require_once '../src/App/Entity/User.php';

//on indique l'espace de nom des classes utilisées

use App\Entity\User;
use App\Manager\UserManager;

//recuperer les utilisateurs

$userManager = new UserManager();
$users = $userManager->readAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Simplon Charleville</title>
</head>
<!-- bootstrap Style CSS File -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Custom Style CSS File -->
<link rel="stylesheet" type="text/css" href="css/custom-style.css">
<!-- Font-Awesome Style CSS File -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
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
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">ACCUEIL</a>
		      </li>


		      <?php
		      if (isset($_SESSION['mail'])) {
					?>
					<li class="nav-item">
		        <a class="nav-link" href="./User/logout.php">Déconnexion</a>
					</li>
					<li class="nav-item">
		        <a class="nav-link" href="#">Mon compte</a>

		      </li>
					<?php }
					else { ?>
		      <li class="nav-item">
		        <a class="nav-link" href="./User/connexion.php">Connexion</a>
					</li>

					<li class="nav-item">
		        <a class="nav-link" href="./User/FormUser.php">Créer un compte</a>

		      </li>
					<?php } ?>
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

<!-- team style 1 -->
<section class="team-section py-5">
	<div class="container">
		<div class="row mb-5">
			<div class="head-box text-center mb-5 col-md-12">
				<h2>Ci-dessous les portfolios des apprenant(e)s de Simplon Charleville</h2>
				<h6 class="text-underline-primary mb-5"></h6>
			</div>

			<?php if(empty($users)): ?>
        <p>il n'y a aucun utilisateur à afficher</p>

    <?php else:?>
        <?php if($users === false): ?>
            <p>Une erreur est survenue</p>

        <?php else: ?>

				<?php foreach($users as $user => $value):
				$nameUser = $value['name'];
				$firstUser = $value['firstname'];
				$lang = $value['language'];
				$citation = $value['citation'];
				$idUser = $value['ID_user'];
				$photo = $value['photo'];
				?>

			<div class="col-md-3 mb-md-5 mb-sm-4">
				<div class="member-box anim-bt t-bottom">
			        <img class="img-fluid" style="width:255px;height:255px;" src="../web/img/aaa.jpg" alt="">
			        <div class="overlay-content">
			          <h3 class="text-white ml-3 my-0"><?= $nameUser . "</br> ".$firstUser ?></h3>
			          <p class="text-white ml-3 mb-3"><?= $lang ?></p>
								<form action="User/profilUser.php" method="post">
									<input type="hidden" name="iduser" value="<?= $idUser ?>">
									<button type="submit">Voir le profil</button>
								</form>

			          <span class="socail-l ml-3 mb-3">
			            <a href="#" class="mr-2"><i class="fa fa-facebook box-circle-solid"></i></a>
						<a href="#" class="mr-2"><i class="fa fa-twitter box-circle-solid"></i></a>
						<a href="#"><i class="fa fa-dribbble box-circle-solid"></i></a>
			          </span>
			        </div>
			    </div>
			</div>
								<?php endforeach; ?>

				<?php endif; ?>
		<?php endif; ?>


		</div>
	</div>
</section>


<!-- Info block 6 -->
<section class="info-section bg-light py-4">
	<div class="container">
		<div class="three-panel-block text-dark">
			<div class="row">
				<div class="col-md-4">
					<div class="service-block text-left px-lg-5 px-md-0">
						<i class="fa fa-laptop box-circle-outline mb-3" aria-hidden="true"></i>
						<h3>Responsive Design</h3>
						<p>Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-block text-left px-lg-5 px-md-0">
						<i class="fa fa-cloud-upload box-circle-outline mb-3" aria-hidden="true"></i>
						<h3>Cloud Storage</h3>
						<p>Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-block text-left px-lg-5 px-md-0">
						<i class="fa fa-diamond box-circle-outline mb-3" aria-hidden="true"></i>
						<h3>Premium Features</h3>
						<p>Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer Block 1 -->
<section class="footer-section bg-dark pt-5">
	<div class="container pb-3">
		<div class="row">
			<div class="col-md-3">
				<div class="about-box text-white">
					<h5 class="mb-3">Liens rapides</h5>
					<ul class="list-unstyled">
						<li><a href="#" class="text-white">Accueil</a></li>
						<li><a href="#" class="text-white">About</a></li>
						<li><a href="#" class="text-white">Services</a></li>
						<li><a href="#" class="text-white">Contactez-nous</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="about-box text-white">
					<h5 class="mb-3">Liens legaux</h5>
					<ul class="list-unstyled">
						<li><a href="#" class="text-white">Politique Privée</a></li>
						<li><a href="#" class="text-white">Thermes et condition</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<div class="about-box text-white">
							<h5 class="mb-3">About Company</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="col-md-6">
						<h5 class="text-white">
							Nous suivre
						</h5>
						<ul class="social-box social-circle">
							<li><a href="http://www.facebook.com/ecoledescodeurs" class="fa-box" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://www.twitter.com/simplon08" class="tw-box" title="Twitter"><i class="fa fa-twitter"></i></a></li>
		          <li><a href="https://fr.linkedin.com/company/simplon-co" class="ld-box" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>

		                </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copy-footer bg-primary py-2 mt-4">
		<div class="container text-center text-light">
			&copy; <a href="http://grafreez.com" target="_blank">Grafreez.com</a> <span id="year"></span>. All rights reserved. Created with <i class="fa fa-heart"></i>
		</div>
	</div>
</section>


<!-- Javascript Files  -->
<script  src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/core.js"></script>
</body>
</html>
