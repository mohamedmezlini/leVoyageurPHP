





<?php
session_start();

  

if (empty ($_SESSION['logged'])) { 

              
              header("Location: connexion.php");
            }



?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php  include("front/head.php");  ?>



	</head>
	<body class="page1" id="top">
		<!--==============================header=================================-->
<?php  


include ("front/nav.php"); 
//include ("front/carousel.php"); 
include ("front/aprescarousel.php"); 


 ?>


			<!--==============================Content=================================-->
			
			<div class="container content-body">  
				
				<section class="row">
					<!--============================== Calendar =================================-->
					
						<div class="col-xs-2 col-sm-2 col-md-2  col-lg-2 navbar-fixed-top sidebar-offcanvas text-align sidbar-social" id="sidebar" >
							<a class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><i class="fa fa-2x fa-facebook"></i></a>
							<a class="btn btn-social-icon btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-google']);"><i class="fa fa-2x   fa-google-plus"></i></a>
							<a class="btn btn-social-icon btn-instagram" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-instagram']);"><i class="fa fa-2x fa-instagram"></i></a>
							<a class="btn btn-social-icon btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><i class="fa fa-2x fa-twitter"></i></a>


						</div>
						<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">



<!-- *************************** zone de travail  -->


<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

						<h1 class="head1">Modifier votre compte</h1>
					</div>




	
	<?php
	include('php/connect-db.php');
	
		$id_client=$_SESSION['id_client'] ;
		//$id_client=$_GET['id_client'];
//$requet = "SELECT * FROM client where id_client='".$id_client."'";
		$result = $mysqli->query("SELECT * FROM client where id_client='".$id_client."'");
		$row = $result->fetch_assoc();
		$nom = $row['nom'];
		$prenom = $row['prenom'];
		$login = $row['login'];
		$mdp = $row['mdp'];
		$adresse = $row['adresse'];
		$mail = $row['mail'];
		$tel = $row['tel'];
		$cin = $row['cin'];
 

  // $ligne = mysql_fetch_array($result);

		?>
		
			<form role="form" action="" method="post" >
				<div class="col-lg-6 col-lg-offset-2">
					

					<div class="form-group">
                         <label  for="InputName " class="  col-lg-6">cin</label>
                        
						<div class="input-group col-lg-6 pull-rigth ">
							<input type="text"   value="<?php echo $cin;?>" class="form-control" name="cin" id="mail" placeholder="Enter votre nom" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
						</div>
						<div class="form-group">
						<label for="InputName "class="  col-lg-6">nom</label>
						<div class="input-group col-lg-6 pull-rigth">
							<input type="text"   value="<?php echo $nom;?>" class="form-control" name="nom" id="mail" placeholder="Enter votre nom" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
						</div>

						<div class="form-group">
							<label for="InputEmail"class="  col-lg-6">prenom</label>
							<div class="input-group col-lg-6 pull-rigth">
								<input  value="<?php echo $prenom;?>"  type="text" class="form-control" id="InputEmail" name="prenom" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>

							<div class="form-group">
								<label for="InputMessage" class="  col-lg-6">adresse</label>
								<div class="input-group col-lg-6 pull-rigth">
								<input value="<?php echo $adresse;?>"  type="text" class="form-control" id="InputEmail" name="adresse" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>

							<div class="form-group">
								<label for="InputMessage"class="  col-lg-6">telephone</label>
								<div class="input-group col-lg-6 pull-rigth">
								<input value="<?php echo $tel;?>"  type="text" class="form-control" id="InputEmail" name="tel" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>

							<div class="form-group">
								<label for="InputMessage"class="  col-lg-6">email</label>
								<div class="input-group col-lg-6 pull-rigth">
								<input  value="<?php echo $mail;?>"  type="text" class="form-control" id="InputEmail" name="mail" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>

							<div class="form-group">
								<label for="InputMessage"class="  col-lg-6">login</label>
								<div class="input-group col-lg-6 pull-rigth">
								<input  value="<?php echo $login;?>"  type="text" class="form-control" id="InputEmail" name="login" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>

							<div class="form-group">
								<label for="InputMessage" class="  col-lg-6">mdp</label>
								<div class="input-group col-lg-6 pull-rigth">
								<input  value="<?php echo $mdp;?>"  type="text" class="form-control" id="InputEmail" name="mdp" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>
							<!--<input  type="hidden" value="1" class="form-control" id="InputEmail" name="idclt" placeholder="Enter idclt" required  >-->






							<input type="submit" name="submit" id="submit" value="Modifier" class="btn btn-warning pull-right">
						</div>
					</form>

				

				
				<?php
			//}
			?>
			<?php
			include('php/connect-db.php');
			if(isset($_POST['nom'])){




				$nom=$_POST['nom'];
				$prenom=$_POST['prenom'];
				$adresse=$_POST['adresse'];
				$mail=$_POST['mail'];
				$cin=$_POST['cin'];
				$tel=$_POST['tel'];
				$login=$_POST['login'];
				$mdp=$_POST['mdp'];

               $stmt = $mysqli->prepare("UPDATE client SET cin= ?,nom= ? ,prenom= ?,mail= ? ,adresse= ?  ,tel= ?  ,login= ?,mdp= ?   WHERE id_client = ?");
                    $stmt->bind_param("ssssssssi", $cin,$nom,$prenom,$mail,$adresse ,$tel,$login,$mdp  ,$id_client);
                    $stmt->execute();
                    $stmt->close();



				//$updateSQL="UPDATE client SET nom='".$nom."' , prenom='".$prenom."' ,adresse='".$adresse."',mail='".$mail."' ,tel='".$tel."' ,cin='".$cin."' ,login='".$login."' ,mdp='".$mdp."' WHERE id_client =".$id_client ;

				
					?><script language="javascript" type="text/javascript">
					alert("la modification est  réussie !");
					</script>
					<?php
//header('location:adminInscription.php');
				
			}

			else{
				?>


				<?php
			}

			?>

      </div>







</div>


<?php  
include("front/footer.php"); 
 ?>


</body>
</html>
