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
            <a class="logo" href="index.php">
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

        <section class="listePublications_ville">
            <a href="./index.php">
                <img src="images/flecheRetour.png" class="img_retour" />
            </a>
            <h2> Propositions en cours </h2>
            <p class="listeDesc"> Vous pouvez retrouver les propositions en cours qui seront actives durant un mois à partir de leur date de publication.</p>
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
                                <div class="card_title">
                                    <p> Projet n°<?php echo $numeroProjet ?> par </p>
                                    <p>  <?php echo $email ?> </p>
                                </div>
                                <p class="card_text"><?php echo $commentaire ?> </p>
                                <p class="card_text"> </p>
                            </div>
                            <p class="descVote"> Pensez-vous qu'il faut présenter cette proposition au Conseil municipal ?</p>
                            <div class="buttons_vote">
                                <input type="button" class="button_CTA_vote" value="Oui"/>
                                <input type="button" class="button_CTA_vote" value="Non"/>
                            </div>
                            <p class="nbVotes"> 200 personnes valides sur 230 votes</p>
                        </div>

                        <?php
                        $numeroProjet = $numeroProjet + 1;
                    }

                    ?>
                </div>

        </section>


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