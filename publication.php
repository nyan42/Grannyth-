<?php

require("bdd/dbSet.php");

session_start();

if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
/*
$sql = "SELECT city FROM users WHERE username = '$username'";
$requete= $db->query($sql);
while ($resultat = $requete->fetch_assoc()){
    $city = $resultat['city'];
}
echo $city;*/
$sql = "SELECT commentaire, photo FROM posts, users WHERE posts.email = users.username and users.username = '$username'";
$requete= $db->query($sql);
while ($resultat = $requete->fetch_assoc()){
    $commentaire = $resultat['commentaire'];
    $photo = $resultat['photo'];
    echo '<p>'.$commentaire.'</p>';
    echo '<img src='.$photo.'/>';
}
?>

