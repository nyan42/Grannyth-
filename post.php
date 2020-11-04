<h3>Poster un projet</h3>
<form method="post" action="post.php">
	<input type="hidden" name="action" value="poster-commentaire" />
	<p>Commentaire<br /><textarea name="commentaire" id="commentaire"></textarea></p>
	<p>Lien de la photo<br /><input type="text" name="photo" id="photo" /></p>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_posts">Poster</button>
		</div>
		<div class="clear"></div>
		<div class="clear"></div>
</form>

<?php
session_start();

if (isset($_SESSION['username'])){
    $test = $_SESSION['username'];
}
require("bdd/dbSet.php");
/*
$sqlinfos = "SELECT nom, adr, cp, ville FROM reservation WHERE num = '$numreservation'";
                          $requete= $conn->query($sqlinfos);

                          // permet d'afficher les données d'une seule et même réservation
                          while ($resultat = $requete->fetch()){
                            $infoNom = $resultat['nom'];
                            $infoAdr = $resultat['adr'];
                            $infoCp = $resultat['cp'];
                            $infoVille = $resultat['ville'];
                          }
                          echo $infoNom.' '.$infoAdr.' '.$infoCp.' '.$infoVille;
*/
if (isset($_POST['reg_posts'])) {
	// receive all input values from the form
	$commentaire = mysqli_real_escape_string($db, $_POST['commentaire']);
	$photo = mysqli_real_escape_string($db, $_POST['photo']);

	$query = "INSERT INTO posts (photo, commentaire, email) 
           VALUES('$photo', '$commentaire', '$test')";
	mysqli_query($db, $query);
}

?>