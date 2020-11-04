<h3>Poster un projet</h3>
<form method="post" action="post.php">
	<input type="hidden" name="action" value="poster-commentaire" />
	<p>Commentaire<br /><textarea name="commentaire" id="commentaire"></textarea></p>
	<p>Lien de la photo<br /><input type="text" name="photo" id="photo" /></p>
	<p>Adresse e-mail<br /><input type="text" name="email" id="email" class="hidden" />
	<div class="input-group">
		<button type="submit" class="btn" name="reg_posts">Poster</button>
	</div>
	<div class="clear"></div>
	<div class="clear"></div>
</form>

<?php
require ("bdd/dbSet.php");



if (isset($_POST['reg_posts'])) {
    // receive all input values from the form
    $commentaire = mysqli_real_escape_string($db, $_POST['commentaire']);
    $photo = mysqli_real_escape_string($db, $_POST['photo']);
    $email = mysqli_real_escape_string($db, $_POST['email']);

    $query = "INSERT INTO posts (photo, commentaire, email) 
           VALUES('$photo', '$commentaire', '$email')";
    mysqli_query($db, $query);
}

?>