</html>


<?php include('server.php') ?>

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
	<!--<div id="heading">
		<h1>Inscription</h1>
	</div>-->

	<!-- Main -->
	<!--<section id="main" class="wrapper">
		<div class="inner">


			<div class="container">
				<div class="row align-items-center">

					<div class="connexion">
						<form method="post" action="register.php">
							<?php include('errors.php'); ?>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="Username">Username</label>
									<input type="text" name="username" class="form-control" id="Username" value="<?php echo $username; ?>">
								</div>
								<div class="form-group col-md-6">
									<label for="inputmail">Email</label>
									<input type="email" class="form-control" id="mail" name="email" value="<?php echo $email; ?>" placeholder="Email"/>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword4">Adresse</label>
								<input type="text" class="form-control" id="adress" name="adress" placeholder="Adresse"/>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="city">Ville</label>
									<input type="text" name="city" class="form-control" id="city" placeholder="Ville"/>
								</div>
								<div class="form-group col-md-6">
									<label for="cp">Code postal</label>
									<input type="number" class="form-control" id="cp" name="cp" placeholder="Code postal"/>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword4">Mot de passe</label>
								<input type="password" class="form-control" id="inputPassword4" name="password_1" placeholder="Mot de passe"/>
							</div>
							<div class="form-group">
								<label for="inputPassword4">Confirmation mot de passe</label>
								<input type="password" class="form-control" id="inputPassword4" name="password_2" placeholder="Confirmation mot de passe"/>
							</div>

							<style>
								italic {
									font-style: italic;
									float: left
								}
							</style>
							<italic> En cliquant sur Register vous confirmez bien que vous êtes âgé de plus de 18 ans.</italic>
							<div class="input-group">
								<button type="submit" class="btn" name="reg_user">Register</button>
							</div>


							<p>
								Already a member? <a href="login.php">Sign in</a>
							</p>
						</form>
					</div>
				</div>
			</div>
	</section>-->

    <section class="register">
        <div class="buttons_loginregister">
            <a href="login.php"> Connexion </a>
            <a href="register.php" class="button_switch"> Inscription </a>
        </div>
        <div>
            <p class="info_register"> Veuillez remplir les informations suivantes afin de créer votre compte. </p>
            <form method="post" action="register.php">
                <?php include('errors.php'); ?>

                <div class="form_group">
                    <input type="text" name="username" class="input_form" id="Username" value="<?php echo $username; ?>" placeholder="Username*"/>
                </div>

                <div class="form_group">
                    <input type="email" class="input_form" id="mail" name="email" value="<?php echo $email; ?>" placeholder="Email*"/>
                </div>

                <div class="form_group2">
                   <input type="number" class="input_form" id="cp" name="cp" placeholder="Code postal*"/>
                    <input type="text" name="city" class="input_form" id="city" placeholder="Ville*"/>
                </div>

                <div class="form_group">
                    <input type="password" class="input_form" id="inputPassword4" name="password_1" placeholder="Mot de passe*"/>
                </div>

                <div class="form_group">
                    <input type="password" class="input_form" id="inputPassword4" name="password_2" placeholder="Confirmation mot de passe*"/>
                </div>

                <p class="info_age"> En cliquant sur "S'inscrire", vous confirmez que vous êtes âgé de plus de 16 ans.</p>
                <p class="info_etoile"> *Informations obligatoires</p>
                <div class="form_group_validate">
                    <button type="submit" class="button_form_loginregister" name="reg_user"> S'inscrire</button>
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