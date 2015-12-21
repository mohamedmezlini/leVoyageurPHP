<?php
session_start();
  include('../php/connect-db.php');
// Change this to your connection info.

// Now we check if the data was submitted, isset will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
    // Could not get the data that should have been sent.
    die ('Username and/or password does not exist!');
}
// Prepare our SQL 
$login = htmlentities($_POST['username'], ENT_QUOTES);
$mdp = htmlentities($_POST['password'], ENT_QUOTES);


  
if ($result = $mysqli->query("SELECT * FROM `client` WHERE login = '".$login."' and mdp = '".$mdp."'"));
  $row = $result->fetch_assoc();
  $nom = $row['nom'];
  $id_client = $row['id_client'];
  $prenom = $row['prenom'];
  $role = $row['role'];
  $nb_achat = $row['nb_achat'];

                        {
                                // display records if there are records to display
                                if ($result->num_rows > 0)
                                {echo "ok";

                                          
                                            
                                          


                            $_SESSION['id_client']=$id_client; 
                            $_SESSION['nom']=$nom;
                            $_SESSION['prenom']=$prenom;
                            $_SESSION['role']=$role;
                            $_SESSION['nb_achat']=$nb_achat;
                            $_SESSION['logged']=true;
                            header("Location: index.php");
                        }
                         else
                                {   
                                        $_SESSION['nom']=$login;
                                        $_SESSION['ERREUR']= "login ou pass invalide";
                                        header("Location: index.php");
                                       
                                }
                    }
?>