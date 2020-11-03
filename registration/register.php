<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styleRegister.css">


	<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
</head>

<body>


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
							<input type="email" class="form-control" id="mail" name="email" value="<?php echo $email; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword4">Password</label>
						<input type="password" class="form-control" id="inputPassword4" name="password_1">
					</div>
					<div class="form-group">
						<label for="inputPassword4">Confirm Password</label>
						<input type="password" class="form-control" id="inputPassword4" name="password_2">
					</div>
					    <input type="checkbox" name="majeur"> Je suis majeur<br>


					<div class="input-group">
						<button type="submit" class="btn" name="reg_user">Register</button>
					</div>
					<p>
						Already a member? <a href="login.php">Sign in</a>
					</p>
				</form>
			</div>
		</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>