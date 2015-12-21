<?php
			include('../php/connect-db.php');
			if(isset($_POST['nom'])){




				$nom=$_POST['nom'];
				$id_client=$_POST['id_client'];
				$prenom=$_POST['prenom'];
				$adresse=$_POST['adresse'];
				$mail=$_POST['mail'];
				$cin=$_POST['cin'];
				$tel=$_POST['tel'];
				$login=$_POST['login'];
				$role=$_POST['role'];
				$nb_achat=$_POST['nb_achatt'];

               $stmt = $mysqli->prepare("UPDATE client SET cin= ?,nom= ? ,prenom= ?,mail= ? ,adresse= ?  ,tel= ?  ,login= ?,role= ?   WHERE id_client = ?");
                    $stmt->bind_param("ssssssssi", $cin,$nom,$prenom,$mail,$adresse ,$tel,$login,$role  ,$id_client);
                    $stmt->execute();
                    $stmt->close();



				//$updateSQL="UPDATE client SET nom='".$nom."' , prenom='".$prenom."' ,adresse='".$adresse."',mail='".$mail."' ,tel='".$tel."' ,cin='".$cin."' ,login='".$login."' ,mdp='".$mdp."' WHERE id_client =".$id_client ;

				
					?><script language="javascript" type="text/javascript">
					alert("la modification est  réussie !");
					</script>
					<?php
header('location:clients.php');
				
			}

			else{
				?>


				<?php
			}

			?>
