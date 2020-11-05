<?php include('server.php') ?>

<!DOCTYPE HTML>
<!--
	SmartCityzen - copyright
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>Connexion</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="../assets/css/main.css" />
</head>

<body class="is-preload">
	<div id="root">
		<div>
			<!-- Header -->
			<header id="header">
				<a class="logo" href="../index.php">SmartCityzen</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

			<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="../index.php">Home</a></li>
				</ul>
			</nav>

			<!-- Heading -->
			<!--	<div id="heading">
		<h1>Connexion</h1>
	</div>-->

			<!-- Main -->
			<!--<section id="main" class="wrapper">
		<div class="inner">
            <div class="buttons_loginregister">
                <a href="login.php"> Connexion </a>
                <a href="register.php"> Inscription </a>
            </div>
            <h2> Connexion </h2>
            <div class="content">
				<div class="container">
					<div class="connexion">
						<form method="post" action="login.php">
							<?php include('errors.php'); ?>
							<div class="form-group">
								<label for="Username">Username</label>
								<input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Adresse email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Mot de passe</label>
								<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Mot de passe">
							</div>
							<div class="form-group">
								<button type="submit" class="btn" name="login_user">Se connecter</button>
							</div>
							<p>
								Not yet a member? <a href="register.php">Sign up</a>
							</p>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>-->

			<section class="login">
				<div class="buttons_loginregister">
					<a href="login.php" class="button_switch"> Connexion </a>
					<a href="register.php"> Inscription </a>
				</div>
				<div>
					<p class="info_login"> Veuillez saisir les informations suivantes afin de vous connecter. </p>
					<form method="post" action="login.php" class="form_loginregister">
						<?php include('errors.php'); ?>
						<div class="form_group">
							<input type="text" name="username" class="input_form" id="exampleInputEmail1" placeholder="Adresse email">
						</div>
						<div class="form_group">
							<input type="password" class="input_form" name="password" id="exampleInputPassword1" placeholder="Mot de passe">
						</div>
						<div class="form_group_validate">
							<button type="submit" class="button_form_loginregister" name="login_user">Se connecter</button>
						</div>
					</form>
				</div>
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

		</div>
	</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styleRegister.css">

</head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>