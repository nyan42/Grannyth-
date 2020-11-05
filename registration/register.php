</html>


<?php include('server.php') ?>

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
	<link rel="stylesheet" href="../assets/css/main.css" />
</head>

<body>
	<div id="root">
		<div>
			<!-- Header -->
			<header id="header">
                <a class="logo_firstpages" href="../index.php">
                    <img src="../images/SmartCitizen_blanc.png" class="logo_img_firstpages" />
                </a>
			</header>


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
							<input type="text" name="username" class="input_form" id="Username" value="<?php echo $username; ?>" placeholder="Pseudo*" />
						</div>

						<div class="form_group">
							<input type="email" class="input_form" id="mail" name="email" value="<?php echo $email; ?>" placeholder="Email*" />
						</div>

						<div class="form_group2">
							<input type="number" class="input_form" id="cp" name="cp" placeholder="Code postal*" />
							<input type="text" name="city" class="input_form" id="city" placeholder="Ville*" />
						</div>

						<div class="form_group">
							<input type="password" class="input_form" id="inputPassword4" name="password_1" placeholder="Mot de passe*" />
						</div>

						<div class="form_group">
							<input type="password" class="input_form" id="inputPassword4" name="password_2" placeholder="Confirmation mot de passe*" />
						</div>

						<p class="info_age"> En cliquant sur "S'inscrire", vous confirmez que vous êtes âgé de plus de 16 ans.</p>
						<p class="info_etoile"> *Informations obligatoires</p>
						<div class="form_group_validate">
							<button type="submit" class="button_form_loginregister" name="reg_user"> S'inscrire</button>
						</div>

					</form>
				</div>
			</section>


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