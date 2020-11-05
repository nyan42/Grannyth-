<?php
session_start();

if (!isset($_SESSION['username'])) {
	$isconnected = 0;
	$username = "";
} else {
	$isconnected = 1;
	$username = $_SESSION['username'];
}

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>SmartCityzen</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

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
		</ul>
	</nav>

	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<h1>SmartCityzen</h1>
			<p>Une application utilisant la réalité augmentée pour embellir votre ville<br />
				Créer pour le Workshop 2020 des B3</p>
		</div>
		<video autoplay loop muted playsinline src="images/banner.mp4"></video>
	</section>

	<!-- Highlights -->
	<section class="wrapper">
		<div class="inner">
			<?php


			if ($isconnected == 1) { ?>
				<header class="special">
					<h2><?php echo $username . " : Vous êtes connecté</h2>"; ?>
						<p> Publiez dès maintenant votre projet</p>
				</header>
				<div class="ImageTrois">
					<div class="textfacile">
						<a href="registration/index.php?logout='1'"> Déconnexion </a>
					</div>

					<div class="textfacile">
						<a href="publication.php"> Mes projets </a>
					</div>
				</div>
			<?php } else { ?>
				<header class="special">
					<h2>Connectez-vous pour voter ou publier</h2>
					<p> Le monde de demain ne demande que vous</p>
				</header>
				<div class="ImageTrois">
					<div class="textfacile">
						<a href="registration/"> Connexion </a>
					</div>
					<div class="textfacile">
						<a href="registration/register.php"> Inscription </a>
					</div>
				</div>
			<?php } ?>

			</br></br>

			<?php if ($isconnected == 1) { ?>
                <div class="buttons_mainpage">
                    <a href="PrendreUnePhoto.php" class="button_CTA">Prendre une photo </a>
                    <a href="post.php" class="button_CTA"> Poster une proposition </a>
                    <a href="publicationGeneral.php" class="button_CTA"> Voir les propositions </a>
                </div>
			<!--	<div class="ImageTrois">
					<div class="textfacile">
						<a href="PrendreUnePhoto.php">Prendre une photo </a>
					</div>
					<div class="textfacile">
						<a href="post.php"> Poster un projet </a>
					</div>
					<div class="textfacile">
						<a href="publicationGeneral.php"> Voir les projets existants </a>
					</div>
				</div>

				<div class="ImageTrois">
					<div class="textfacile">
						<a href="PrendreUnePhoto.php"><img src="images/PrendreEnPhoto.jpg"></a>
					</div>
					<div class="textfacile">
						<a href="post.php"><img src="images/projet.jpg"></a>
					</div>
					<div class="textfacile">
						<a href="publicationGeneral.php"><img src="images/bond.jpg"></a>
					</div>
				</div>-->
			<?php } ?>
		</div>
	</section>

	<!-- Testimonials -->
	<section class="wrapper">
		<div class="inner">
			<header class="special">
				<h2>Les projets qui ont vu déjà le jour</h2>
				<p>Ces projets ont réussi à apparaitre dans les villes grace à votre aide</p>
			</header>
			<div class="testimonials">
				<section>
					<div class="content">
						<blockquote>
							<p>Roubaix - Création d'un skatepark à l'angle de Road Street avenue.</p>
						</blockquote>
						<div class="author">
							<div class="image">
								<img src="images/skatepark.jpg" alt="skatepark" />
							</div>
							<p class="credit">- <strong>Michael J. Johnson</strong> <span>Maire de Roubaix</span></p>
						</div>
					</div>
				</section>
				<section>
					<div class="content">
						<blockquote>
							<p>Villeneuve d'Ascq - Restauration d'un abri-bus.</p>
						</blockquote>
						<div class="author">
							<div class="image">
								<img src="images/abribus.jpg" alt="abribus" />
							</div>
							<p class="credit">- <strong>John Fidjeralt Kronembourg</strong> <span>Adjointe au Maire.</span></p>
						</div>
					</div>
				</section>
				<section>
					<div class="content">
						<blockquote>
							<p>Douai - Organisation d'un festival de pétanque inter-âge.</p>
						</blockquote>
						<div class="author">
							<div class="image">
								<img src="images/petanque.jpg" alt="petanque" />
							</div>
							<p class="credit">- <strong>Bob Ralowski</strong> <span>Président du club sportif.</span></p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>
	<!-- CTA -->
	<section id="cta" class="wrapper">
		<div class="inner">
			<h2>Le futur n'attend que vous</h2>
			<p>Nos partenariats, nos projets, tout cela n'est possible qu'à l'aide de vous.
				Avec déjà plus de 10000 projets réalisés partout en France, notre ambition de
				se propager dans d'autres pays est de plus en plus grande.</p>
		</div>
	</section>

	<!-- Footer -->
	<footer id="footer">
		<div class="inner">
			<div class="content">
				<section>
					<h3>Accumsan montes viverra</h3>
					<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer
						non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem
						accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum
						primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed
						feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
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
	<script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$('.repondre').click(function() {
			var id = $(this).attr('data-rel');
			if ($('#comform-div-' + id).hasClass('hidden')) {
				$('.repondre').removeClass('button-blue');
				$(this).addClass('button-blue').css('float', 'left');
				$('.comform-div').addClass('hidden');
				$('#comform-div-' + id).find('p').show();
				$('#comform-div-' + id).removeClass('hidden');
				return false;
			} else {
				$('#comform-' + id).submit();
				return false;
			}
		});
	</script>

</body>

</html>