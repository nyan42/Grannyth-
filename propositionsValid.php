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
                <li><a href="registration/index.php"> Mon profil </a></li>
                <li><a href="PrendreUnePhoto.php">Prendre une photo </a></li>
                <li><a href="post.php">Publier une proposition </a></li>
                <li><a href="publicationGeneral.php"> Propositions en cours </a></li>
                <li><a href="propositionsValid.php"> Propositions validées </a></li>
                <li><a href="#"> SmartCitizen, c'est quoi ? </a></li>
                <li><a href="index.php?logout='1'">Déconnexion </a></li>
            </ul>
        </nav>

        <section class="propositionsValid">
            <a href="./index.php">
                <img src="images/flecheRetour.png" class="img_retour" />
            </a>

            <h2> Propositions validées</h2>
            <p class="descValid"> Retrouvez toutes les propositions validées de votre ville ainsi que leur statut.</p>
            <div class="listePublications">
                <div class="card_publi">
                    <img src="images/skatepark.jpg" class="card_img" alt="skatepark"/>
                    <div class="card_contenu">
                        <div class="card_title">
                            <p> Projet n°2 par </p>
                            <p>  Tom </p>
                        </div>
                        <p class="card_text"> Création d'un skatepark à l'angle de Road Street avenue pour les petits et grands. Avec de quoi faire du skate, du roller et du vélo tout en sécurité.</p>
                    </div>
                    <p class="descStatut"> Statut : Construction prévue en mars 2021 </p>
                </div>
                <div class="card_publi">
                    <img src="images/abribus.jpg" class="card_img" alt="abribus"/>
                    <div class="card_contenu">
                        <div class="card_title">
                            <p> Projet n°6 par </p>
                            <p>  Sonia </p>
                        </div>
                        <p class="card_text"> Restauration d'un abri-bus délabré que mes enfants utilisent tous les jours. Ils ne sont même pas protégés de la pluie et la neige.</p>
                    </div>
                    <p class="descStatut"> Statut : En attente de présentation le 01/12 </p>
                </div>
            </div>
        </section>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </div>
</body>

</html>