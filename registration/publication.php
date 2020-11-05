<!--<!DOCTYPE HTML>-->

<!--
	SmartCityzen - Worskshop 2020
-->
<!--<html>

<head>
    <title>Publications</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>-->
   <!-- <div id="root">-->

    <!-- Header -->
   <!-- <header id="header">
        <a class="logo" href="index.php">SmartCityzen</a>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>-->

    <!-- Nav -->
   <!-- <nav id="menu">
        <ul class="links">
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>-->

    <!-- Main -->
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
                $sql = "SELECT commentaire, photo FROM posts, users WHERE posts.email = users.username and users.username = '$username'";
                $requete = $db->query($sql);

                ?>
                <div class="listePublications">
                    <?php
                    $numeroProjet = 1;
                    while ($resultat = $requete->fetch_assoc()) {
                        $commentaire = $resultat['commentaire'];
                        $photo = $resultat['photo'];
                    ?>

                        <div class="card_publi">
                            <?php echo '<img src=images/' . $photo . ' class="card_img"' . 'alt="' . $photo . '">' ?>
                            <div class="card_contenu">
                                <h5 class="card_title">Projet n°<?php echo $numeroProjet ?></h5>
                                <p class="card_text"><?php echo $commentaire ?> </p>
                            </div>
                            <p class="nbVotes"> 200 personnes valides sur 230 votes</p>
                        </div>

                    <?php
                        $numeroProjet = $numeroProjet + 1;
                    }

                    ?>
            </div>
            </div>
        </section>


    <!-- Scripts -->
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>-->

  <!--  </div>-->
<!--</body>

</html>-->