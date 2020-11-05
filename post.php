<?php
session_start();

require("bdd/dbSet.php");
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
}

?>

<!DOCTYPE HTML>
<!--
	SmartCityzen - copyright
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>Generic Page - SmartCityzen - copyright</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
	<div id="root">

		<!-- Header -->
		<header id="header">
			<a class="logo" href="index.php">SmartCityzen</a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Nav -->
		<nav id="menu">
			<ul class="links">
				<li><a href="index.php">Home</a></li>
				<li><a href="elements.php">Elements</a></li>
				<li><a href="generic.php">Generic</a></li>
			</ul>
		</nav>

		<!-- Heading -->
		<!--<div id="heading">
		<h1>Generic Page</h1>
	</div>-->

		<!-- Main -->
		<!--<section id="main" class="wrapper">
		<div class="inner">
			<div class="content">
				<h3>Poster un projet</h3>
				<form method="post" action="publication.php">
					<input type="hidden" name="action" value="poster-commentaire" />
					<p>Commentaire<br /><textarea name="commentaire" id="commentaire"></textarea></p>
					<p>Lien de la photo<br /><input type="text" name="photo" id="photo" /></p>
					<div class="input-group">
						<button type="submit" class="btn" name="reg_posts">Poster</button>
					</div>
					<div class="clear"></div>
					<div class="clear"></div>
					<a href="./index.php"> Retour
			</div> </a>

			</form>

		</div>
	</section>-->

		<section class="faireProposition">
			<a href="./index.php">
				<img src="images/flecheRetour.png" class="img_retour" />
			</a>

			<h2> Publier une proposition</h2>
			<p class="descProp"> Veuillez remplir les informations suivantes afin de publier votre proposition.</p>
			<p class="nbProp"> Nb : Votre proposition doit se situer dans la ville où vous habitez (renseignée dans votre profil).</p>

			<section class="prendre_photo">
				<div class="block_prendrephoto">
					<input type="image" class="img_prendrephoto" id="ImageFake" name="avatar" accept="image/png, image/jpeg" src="images/InsertImg2.png" onclick="getfile()">
					<p id="selectedfile" style="color:white;text-align:center;"> Sélectionner une image </p>
					<img id="changer" class="img_prendrephoto" src="images/loading.gif" style="display:none">

					<script type="text/javascript">
						function getfile() {
							document.getElementById('hiddenfile').click();
							miseEnAttente0();

							function miseEnAttente0() {
								//Traitement
								setTimeout(fonctionAExecuter0, 2000); //On attend 5 secondes avant d'exécuter la fonction
							}

							function miseEnAttente1() {
								//Traitement
								setTimeout(fonctionAExecuter1, 2200); //On attend 5 secondes avant d'exécuter la fonction
							}

							function fonctionAExecuter0() {
								let nomImage = document.getElementById('hiddenfile').value;
								document.getElementById('photo').value = nomImage.substr(12); //"Veuillez patienter..."

								document.getElementById('changer').style.display = "block";
								console.log(nomImage)
								if (nomImage == "") {
									miseEnAttente0(); //On boucle jusqu'a tant qu'on insert MDR, du code de qualité ca 
								} else {
									miseEnAttente1(nomImage);
								}


							}

							function fonctionAExecuter1(nomImage) {
								//document.getElementById('selectedfile').value = "Fichier téléchargé avec succès"
								document.getElementById('changer').style.display = "none";
								document.getElementById('ImageFake').style.display = "none";
								document.getElementById('selectedfile').style.display = "none";
								document.getElementById('photo').value = nomImage.substr(12); //"Veuillez patienter..."
								alert(document.getElementById('photo').value)

							}


						}
					</script>
				</div>
				<div class="block_buttonPublier">
					<input type="file" id="hiddenfile" style="display:none" class="img_prendrephoto" name="avatar" accept="image/png, image/jpeg" src="images/InsertImg2.png" />
				</div>
			</section>

			<form method="post" action="publicationGeneral.php">
				<input type="hidden" name="action" value="poster-commentaire" />
				<div class="block_post">
					<p> Description </p>
					<textarea name="commentaire" id="commentaire" class="input_form"> </textarea>
				</div>
				<div class="block_post">
					<p> Photo</p>
					<input type="text" name="photo" class="input_form" id="photo" />
				</div>

				<div class="button_poster">
					<button type="submit" class="button_CTA" name="reg_posts">Publier </button>
				</div>

				<div class="clear"></div>
				<div class="clear"></div>

			</form>



		</section>

		<!-- Footer -->
		<!--<footer id="footer">
		<div class="inner">
			<div class="content">
				<section>
					<h3>Accumsan montes viverra</h3>
					<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
				</section>
				<section>
					<h4>Sem turpis amet semper</h4>
					<ul class="alt">
						<li><a href="#">Dolor pulvinar sed etiam.</a></li>
						<li><a href="#">Etiam vel lorem sed amet.</a></li>
						<li><a href="#">Felis enim feugiat viverra.</a></li>
						<li><a href="#">Dolor pulvinar magna etiam.</a></li>
					</ul>
				</section>
				<section>
					<h4>Magna sed ipsum</h4>
					<ul class="plain">
						<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
						<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
						<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
						<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
					</ul>
				</section>
			</div>
			<div class="copyright">
				&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
			</div>
		</div>
	</footer>-->

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</div>
</body>

</html>