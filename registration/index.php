<?php
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}



if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}


require ("../bdd/dbSet.php");

$username = $_SESSION['username'];

$sql = "SELECT email, city, cp FROM users WHERE username = '$username'";
$requete = $db->query($sql);
while ($resultat = $requete->fetch_assoc()) {
                        $email = $resultat['email'];
						$city = $resultat['city'];
						$cp = $resultat['cp'];
 }
?>

<!DOCTYPE HTML>

<!--
	SmartCityzen - Worskshop 2020
-->
<html>

<head>
	<title>Profil</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="../assets/css/main.css" />
</head>

<body>
    <div id="root">

	<!-- Header -->
        <header id="header">
            <a class="logo logo_nm" href="../index.php">
                <img src="../images/SmartCitizen_blanc.png" class="logo_img" />
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

	<!-- Main -->
	<!--<section id="main" class="wrapper">
		<div class="inner">
			<div class="content">
				<div class="container">

					<div class="connexion">-->
						<!-- notification message -->
						<?php if (isset($_SESSION['success'])) : ?>
							<!--<div class="error success">
								<h3>
									<?php
									echo $_SESSION['success'];
									unset($_SESSION['success']);
									?>
								</h3>
							</div>-->
						<?php endif ?>

						<!-- logged in user information -->
						<?php if (isset($_SESSION['username'])) : ?>
							<!--<p>Bonjour <strong><?php echo $_SESSION['username']; ?></strong></p>
							<p> <a href="../index.php" style="color: red;">menu principal</a> </p>
							<p> <a href="../publication.php" style="color: red;">mes projets</a> </p>
							<p> <a href="index.php?logout='1'" style="color: red;">déconnnexion</a> </p>-->
						<?php endif ?>
					<!--</div>
				</div>

			</div>
		</div>
	</section>-->

        <section class="profil">
            <a href="../index.php">
                <img src="../images/flecheRetour.png" class="img_retour" />
            </a>
            <?php if (isset($_SESSION['success'])) : ?>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            <?php endif ?>
            <?php if (isset($_SESSION['username'])) : ?>
                <div class="title_profil">
                    <div class="group_infosPerso">
                        <div>
                            <h2> <?php echo $_SESSION['username']; ?> </h2>
                        </div>
                        <div class="block_img">
                            <img src="../images/modifierImg.png"/>
                        </div>

                    </div>

                </div>
                <div class="infos_perso">
                    <div class="group_infosPerso">
                        <div>
                            <p> Adresse mail  : <?php echo $email; ?> </p>
                        </div>
                        <div class="block_img">
                            <img src="../images/modifierImg.png"/>
                        </div>
                    </div>
                    <div class="group_infosPerso">
                        <div>
                            <p> Mot de passe : **********</p>
                        </div>
                        <div class="block_img">
                            <img src="../images/modifierImg.png"/>
                        </div>
                    </div>
                    <div class="group_infosPerso">
                        <div>
                            <p> Code postal  : <?php echo $cp; ?> </p>
                        </div>
                        <div class="block_img">
                            <img src="../images/modifierImg.png"/>
                        </div>
                    </div>
                    <div class="group_infosPerso">
                        <div>
                            <p> Ville  : <?php echo $city; ?> </p>
                        </div>
                        <div class="block_img">
                            <img src="../images/modifierImg.png"/>
                        </div>
                    </div>
                </div>

                <section class="listeMesPublications">
            <h2 class="title_mespubli"> Mes propositions </h2>
            <div>

                <?php

                require("../bdd/dbSet.php");


                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                }

                if (isset($_POST['reg_posts'])) {
                    // receive all input values from the form
                    $commentaire = mysqli_real_escape_string($db, $_POST['commentaire']);
                    $photo = mysqli_real_escape_string($db, $_POST['photo']);


                    $query = "INSERT INTO posts (photo, commentaire, email) 
        VALUES ('$photo', '$commentaire', '$username')";
                    mysqli_query($db, $query);
                }
                $sql = "SELECT commentaire, photo, posts.id FROM posts, users WHERE posts.email = users.username and users.username = '$username' ORDER BY posts.id DESC";
                $requete = $db->query($sql);

                ?>
                <div class="listePublications">
                    <?php
                    $numeroProjet = 1;
                    while ($resultat = $requete->fetch_assoc()) {
                        $commentaire = $resultat['commentaire'];
                        $photo = $resultat['photo'];
                        $id = $resultat['id'];
                    ?>
                        <div class="card_publi">
                            <?php echo '<img src=../images/' . $photo . ' class="card_img"' . 'alt="' . $photo . '">' ?>
                            <div class="card_contenu">
                                <h5 class="card_title">Projet n°<?php echo $id ?></h5>
                                <p class="card_text" style="color:#222222;"><?php echo $commentaire ?> </p>
                            </div>
                            <p class="nbVotes" style="color:#222222;font-style:italic;"> 200 validations sur 230 votes</p>
                        </div>

                    <?php
                        $numeroProjet = $numeroProjet + 1;
                    }

                    ?>
            </div>
            </div>
        </section>
                <?php endif ?>

        </section>
    </div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>

