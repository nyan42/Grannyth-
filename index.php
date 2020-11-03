<?php include('server.php') ?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Grannythé</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

	<!-- Header -->
	<header id="header">
		<a class="logo" href="index.php">Grannythé</a>
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

	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<h1>Grannythé</h1>
			<p>A responsive business oriented template with a video background<br />
				designed by <a href="https://templated.co/">TEMPLATED</a> and released under the Creative Commons
				License.</p>
		</div>
		<video autoplay loop muted playsinline src="images/banner.mp4"></video>
	</section>

	<!-- Highlights -->
	<section class="wrapper">
		<div class="inner">
			<header class="special">
				<h2>Connectez-vous pour voter ou publier</h2>
				<p> Le monde de demain ne demande que vous</p>
			</header>
			<div class="highlights">
				<a href="registration/"> Connexion </a><a href="registration/register.php"> Inscription </a>
			</div>
		</div>
	</section>

	<section class="comment">


		<h3>Poster un projet</h3>
		<form method="post" action="http://localhost/template/index.php?>">
			<input type="hidden" name="action" value="poster-commentaire" />
			<p>Commentaire<br /><textarea name="commentaire"></textarea></p>
			<p>Nom<br /><input type="text" name="nom" /></p>
			<p>Lien de la photo<br /><input type="text" name="photo" /></p>
			<p>Adresse e-mail<br /><input type="text" name="email" class="hidden" />
				<p><input type="submit" class="button-blue left" value="Poster mon commentaire" /></p>
				<div class="clear"></div>
				<p class="red right">Votre adresse e-mail n'est pas publiée lorsque vous ajoutez un commentaire.</p>
				<div class="clear"></div>
		</form>

	</section>
	<!-- Testimonials -->
	<section class="wrapper">
		<div class="inner">
			<header class="special">
				<h2>Nos demandes de projets</h2>
				<p>Votez pour les projets que vous désirez voir dans votre ville</p>
			</header>
			<div class="testimonials">
				<section>
					<div class="content">
						<blockquote>
							<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem
								non mi integer non faucibus.</p>
						</blockquote>
						<div class="author">
							<div class="image">
								<img src="images/pic01.jpg" alt="" />
							</div>
							<p class="credit">- <strong>Jane Doe</strong> <span>CEO - ABC Inc.</span></p>
						</div>
					</div>
				</section>
				<section>
					<div class="content">
						<blockquote>
							<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem
								non mi integer non faucibus.</p>
						</blockquote>
						<div class="author">
							<div class="image">
								<img src="images/pic03.jpg" alt="" />
							</div>
							<p class="credit">- <strong>John Doe</strong> <span>CEO - ABC Inc.</span></p>
						</div>
					</div>
				</section>
				<section>
					<div class="content">
						<blockquote>
							<p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem
								non mi integer non faucibus.</p>
						</blockquote>
						<div class="author">
							<div class="image">
								<img src="images/pic02.jpg" alt="" />
							</div>
							<p class="credit">- <strong>Janet Smith</strong> <span>CEO - ABC Inc.</span></p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>
	<!-- CTA -->
	<section id="cta" class="wrapper">
		<div class="inner">
			<h2>Curabitur ullamcorper ultricies</h2>
			<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non
				faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan
				varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus
				vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer
				ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
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