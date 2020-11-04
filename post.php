<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>Generic Page - Industrious by TEMPLATED</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

	<!-- Header -->
	<header id="header">
		<a class="logo" href="index.php">Industrious</a>
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
	<div id="heading">
		<h1>Generic Page</h1>
	</div>

	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="inner">
			<div class="content">
				<h3>Poster un projet</h3>
				<form method="post" action="post.php">
					<input type="hidden" name="action" value="poster-commentaire" />
					<p>Commentaire<br /><textarea name="commentaire" id="commentaire"></textarea></p>
					<p>Lien de la photo<br /><input type="text" name="photo" id="photo" /></p>
					<div class="input-group">
						<button type="submit" class="btn" name="reg_posts">Poster</button>
					</div>
					<div class="clear"></div>
					<div class="clear"></div>
				</form>

				<?php
				session_start();

				if (isset($_SESSION['username'])) {
					$test = $_SESSION['username'];
				}
				require("bdd/dbSet.php");
				/*
$sqlinfos = "SELECT nom, adr, cp, ville FROM reservation WHERE num = '$numreservation'";
                          $requete= $conn->query($sqlinfos);

                          // permet d'afficher les données d'une seule et même réservation
                          while ($resultat = $requete->fetch()){
                            $infoNom = $resultat['nom'];
                            $infoAdr = $resultat['adr'];
                            $infoCp = $resultat['cp'];
                            $infoVille = $resultat['ville'];
                          }
                          echo $infoNom.' '.$infoAdr.' '.$infoCp.' '.$infoVille;
*/
				if (isset($_POST['reg_posts'])) {
					// receive all input values from the form
					$commentaire = mysqli_real_escape_string($db, $_POST['commentaire']);
					$photo = mysqli_real_escape_string($db, $_POST['photo']);

					$query = "INSERT INTO posts (photo, commentaire, email) 
           VALUES('$photo', '$commentaire', '$test')";
					mysqli_query($db, $query);
				}

				?>
			</div>
	</section>

	<!-- Footer -->
	<footer id="footer">
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
	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>