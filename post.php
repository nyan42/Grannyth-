<?php
session_start();

require("bdd/dbSet.php");
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
}

?>

<!DOCTYPE HTML>

<!--
	SmartCityzen - Worskshop 2020
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
			<a class="logo logo_nm" href="index.php">
				<img src="images/SmartCitizen_blanc.png" class="logo_img" />
			</a>
			<nav>
				<a href="#menu"></a>
			</nav>
		</header>

		<!-- Nav -->
		<nav id="menu">
			<ul class="links">
				<li><a href="registration/index.php"> Mon profil </a></li>
				<li><a href="PrendreUnePhoto.php">Prendre une photo </a></li>
				<li><a href="post.php">Publier une proposition </a></li>
				<li><a href="publicationGeneral.php"> Propositions en cours </a></li>
				<li><a href="propositionsValid.php"> Propositions validées </a></li>
				<li><a href="#"> SmartCitizen, c'est quoi ? </a></li>
				<li><a href="index.php?logout='1'">Déconnexion </a></li>
			</ul>
		</nav>

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

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</div>
</body>

</html>