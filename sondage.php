<?php
                            require ("bdd/dbSet.php");

                            $id = $_GET['id'];
                            var_dump($id);
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
