<?php

require("bdd/dbSet.php");

session_start();

if (isset($_SESSION['username'])){
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
    echo '<img src=images/'.$photo.'>';
}
?>

