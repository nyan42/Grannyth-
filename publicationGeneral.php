<!DOCTYPE HTML>
<!--
	SmartCityzen - copyright
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<?php
require("bdd/dbSet.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT  nbValide, nbInvalide FROM posts WHERE id = '$id'";
    $requete = $db->query($sql);
    while ($resultat = $requete->fetch_assoc()) {
        $nbValide = $resultat['nbValide'];
        $nbInvalide = $resultat['nbInvalide'];
    }

    if (isset($_POST['reg_oui'])) {
        // receive all input values from the form
        $requete = $db->query("SELECT nbValide FROM posts Where id = '$id'");
        while ($resultat = $requete->fetch_assoc()) {
            $nbValide = $resultat['nbValide'];
        }
        $nbValide += 1;
        $query = "UPDATE posts
                                SET nbValide = '$nbValide'
                                WHERE id = '$id'";
        mysqli_query($db, $query);
    }


    if (isset($_POST['reg_non'])) {
        // receive all input values from the form
        $requete = $db->query("SELECT nbInvalide FROM posts Where id = '$id'");
        while ($resultat = $requete->fetch_assoc()) {
            $nbInvalide = $resultat['nbInvalide'];
        }
        $nbInvalide += 1;
        $query = "UPDATE posts
                                SET nbInvalide = '$nbInvalide'
                                WHERE id = '$id'";
        mysqli_query($db, $query);
    }
}

?>

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
            <a class="logo logo_nm" href="index.php">
                <img src="images/SmartCitizen_blanc.png" class="logo_img" />
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


                    $query = "INSERT INTO posts (photo, commentaire, email, nbValide, nbInvalide) 
                                VALUES ('$photo', '$commentaire', '$username', 0,0)";
                    mysqli_query($db, $query);
                }
                $sql = "SELECT commentaire, photo, email, id, nbValide, nbInvalide FROM posts ORDER BY id DESC";
                $requete = $db->query($sql);

                ?>
                <div class="listePublications">
                    <?php
                    $numeroProjet = 1;
                    while ($resultat = $requete->fetch_assoc()) {
                        $commentaire = $resultat['commentaire'];
                        $photo = $resultat['photo'];
                        $email = $resultat['email'];
                        $id = $resultat['id'];
                        $nbValide = $resultat['nbValide'];
                        $nbInvalide = $resultat['nbInvalide'];
                    ?>

                        <div class="card_publi">
                            <?php echo '<img src=images/' . $photo . ' class="card_img"' . 'alt="' . $photo . '">' ?>
                            <div class="card_contenu">
                                <div class="card_title">
                                    <p> Projet n°<?php echo $id ?></p>
                                    <p> - <?php echo $email ?> </p>
                                </div>
                                <p class="card_text"><?php echo $commentaire ?> </p>
                            </div>
                            <p class="descVote"> Pensez-vous qu'il faut présenter cette proposition au Conseil municipal ?</p>

                            <div class="block_votes">
                                <form method="POST" action="publicationGeneral.php?id=<?php echo $id; ?>">
                                    <div class="buttons_vote">
                                        <button type="submit" class="button_CTA_vote" name="reg_oui">Oui </button>
                                    </div>
                                </form>
                                <form method="POST" action="publicationGeneral.php?id=<?php echo $id; ?>">
                                    <div class="buttons_vote">
                                        <button type="submit" class="button_CTA_vote" name="reg_non">Non </button>
                                    </div>

                                </form>
                            </div>

                            <p class="nbVotes"><?php echo $nbValide; ?> / <?php $nbvotes = $nbValide + $nbInvalide;
                                                                            echo $nbvotes ?> personnes pensent que oui. </p>
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