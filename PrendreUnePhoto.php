<!DOCTYPE HTML>
<!--
	SmartCityzen - copyright
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>Prendre une photo</title>
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
            <li><a href="PrendreUnePhoto.php">Prendre une photo </a></li>
            <li><a href="post.php">Publier une proposition </a></li>
            <li><a href="publicationGeneral.php">Voir les propositions </a></li>
            <li><a href="registration/index.php"> Mon profil </a></li>
            <li><a href="#"> SmartCitizen, c'est quoi ? </a></li>
            <li><a href="index.php?logout='1'">Déconnexion </a></li>
        </ul>
    </nav>

		<section class="prendre_photo" id="main">
			<a href="./index.php">
				<img src="images/flecheRetour.png" class="img_retour" />
			</a>
			<div class="block_prendrephoto">
				<input type="image" class="img_prendrephoto" id="ImageFake" name="avatar" accept="image/png, image/jpeg" src="images/InsertImg2.png" onclick="getfile()">
				<img id="changer" class="img_prendrephoto" src="images/loading.gif" style="display:none">
			</div>
			<div class="block_buttonPublier">
				<a href="post.php" class="button_CTA"> Prenez la photo </a>

				<input type="file" id="hiddenfile" style="display:none" class="img_prendrephoto" name="avatar" accept="image/png, image/jpeg" src="images/InsertImg2.png" />
			</div>
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