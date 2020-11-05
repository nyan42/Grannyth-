<!DOCTYPE HTML>
<!--
	SmartCityzen - copyright
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Publications</title>
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

    <!-- Heading -->
   <!-- <div id="heading">
        <h1>Publications</h1>
    </div>-->

    <!-- Main -->
   <!-- <section id="main" class="wrapper">

        <div class="inner">
            <a href="./index.php">
                <img src="images/flecheRetour.png" class="img_retour" />
            </a>

            <div class="content">

                </div>
            </div>
        </div>
    </section>-->

        <section class="listePublications_ville">
            <a href="./index.php">
                <img src="images/flecheRetour.png" class="img_retour" />
            </a>
            <div>
                <?php

                require("bdd/dbSet.php");

                session_start();

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
                $sql = "SELECT commentaire, photo, email FROM posts";
                $requete = $db->query($sql);

                ?>
                <div class="listePublications">
                    <?php
                    $numeroProjet = 1;
                    while ($resultat = $requete->fetch_assoc()) {
                        $commentaire = $resultat['commentaire'];
                        $photo = $resultat['photo'];
                        $email = $resultat['email'];
                        ?>

                        <div class="card_publi">
                            <?php echo '<img src=images/' . $photo . ' class="card_img"' . 'alt="' . $photo . '">' ?>
                            <div class="card_contenu">
                                <h5 class="card_title">Projet n°<?php echo $numeroProjet ?></h5>
                                <p class="card_text"><?php echo $commentaire ?> </p>
                                <p class="card_text"><?php echo $email ?> </p>
                            </div>
                        </div>

                        <?php
                        $numeroProjet = $numeroProjet + 1;
                    }

                    ?>
                </div>

        </section>




    <!-- Footer -->
  <!--  <footer id="footer">
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

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

    </div>
</body>

</html>