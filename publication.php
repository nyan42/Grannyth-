<?php

require("bdd/dbSet.php");

session_start();

if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}

$sql = "SELECT city FROM users WHERE username = $username";
                          $requete= $db->query($sql);
                          while ($resultat = $requete->fetch()){
                            $city = $resultat['city'];
                          }
                          echo $city;

?>