



<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<title> index 1</title>

	<meta charset="utf-8">

	<?php 
	 include("header.php"); 

	 ?>

</head>
<body>
<?php 

if (empty ($_SESSION['logged'])) {
	exit(header("Location:connexion.php")); 
	
} 
else {

	if ($_SESSION['role']==0){
		exit(header("Location:../index.php"));
	}

	include("nav.php"); 

  ?>


<!-- ============================================  le contenu du site ==================================-->
<div class=" container  content-body">


<div class=" row" style =" margin-top: 53px;"
>
<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

						<h1 class="head1"> Modifier Client </h1>
					</div>
	<div class="   col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center "  >

		
	<?php
	include('php/connect-db.php');
	if(isset($_GET['id_client'])){
		$id_client=$_GET['id_client'];
//$requet = "SELECT * FROM client where id_client='".$id_client."'";
		$result = $mysqli->query("SELECT * FROM client where id_client='".$id_client."'");
		$row = $result->fetch_assoc();
		$nom = $row['nom'];
		$prenom = $row['prenom'];
		$login = $row['login'];
		$mdp = $row['mdp'];
		$role = $row['role'];
		$adresse = $row['adresse'];
		$mail = $row['mail'];
		$tel = $row['tel'];
		$cin = $row['cin'];



  // $ligne = mysql_fetch_array($result);

		?>
	
			<form role="form" action="" method="post" >
				<div class="col-lg-6">
					<div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Required Field</strong></div>
					<div class="form-group">


                         <label for="InputName">cin</label>
						<div class="input-group col-lg-6">
							<input type="text"   value="<?php echo $cin;?>" class="form-control" name="cin" id="mail" placeholder="Enter votre nom" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
						</div>

						<label for="InputName">nom</label>
						<div class="input-group col-lg-6">
							<input type="text"   value="<?php echo $nom;?>" class="form-control" name="nom" id="mail" placeholder="Enter votre nom" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
						</div>

						<div class="form-group">
							<label for="InputEmail">prenom</label>
							<div class="input-group col-lg-6">
								<input  value="<?php echo $prenom;?>"  type="text" class="form-control" id="InputEmail" name="prenom" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>

							<div class="form-group">
								<label for="InputMessage col-lg-6">adresse</label>
								<div class="input-group col-lg-6"
								>
								<input value="<?php echo $adresse;?>"  type="text" class="form-control" id="InputEmail" name="adresse" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>

							<div class="form-group">
								<label for="InputMessage col-lg-6">telephone</label>
								<div class="input-group col-lg-6"
								>
								<input value="<?php echo $tel;?>"  type="text" class="form-control" id="InputEmail" name="tel" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>

							<div class="form-group">
								<label for="InputMessage col-lg-6">email</label>
								<div class="input-group col-lg-6"
								>
								<input  value="<?php echo $mail;?>"  type="text" class="form-control" id="InputEmail" name="mail" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>


 













							<div class="form-group">
								<label for="InputMessage col-lg-6">login</label>
								<div class="input-group col-lg-6"
								>
								<input  value="<?php echo $login;?>"  type="text" class="form-control" id="InputEmail" name="login" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>

							<div class="form-group">
								<label for="InputMessage col-lg-6">mdp</label>
								<div class="input-group col-lg-6"
								>
								<input  value="<?php echo $mdp;?>"  type="text" class="form-control" id="InputEmail" name="mdp" placeholder="Enter l prenom" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
							</div>
							<!--<input  type="hidden" value="1" class="form-control" id="InputEmail" name="idclt" placeholder="Enter idclt" required  >-->


<tr>
<td height="38">
<font color="#000033" size="+1.5">Role :<font color="#FF0000" size="+1"> (*)</font></font></td><td><center>
<select name="role" >
<option value="0"> utilisateur</option>
<option value="1"> administrateur</option>
</select></center></td></tr>
</center></td></tr>
<tr>



							<input type="submit" name="submit" id="submit" value="Modifier" class="btn btn-info pull-right">
						</div>
					</form>

				</center>

				
				<?php
			}
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
				$role =$_POST['role'];
				$login=$_POST['login'];
				$mdp=$_POST['mdp'];

               $stmt = $mysqli->prepare("UPDATE client SET cin= ?,nom= ? ,prenom= ?,mail= ? ,adresse= ?  ,tel= ?,login= ?,mdp= ? ,role=?   WHERE id_client = ?");
                    $stmt->bind_param("sssssssssi", $cin,$nom,$prenom,$mail,$adresse ,$tel,$login,$mdp ,$role ,$id_client);
                    $stmt->execute();
                    $stmt->close();



				//$updateSQL="UPDATE client SET nom='".$nom."' , prenom='".$prenom."' ,adresse='".$adresse."',mail='".$mail."' ,tel='".$tel."' ,cin='".$cin."' ,login='".$login."' ,mdp='".$mdp."' WHERE id_client =".$id_client ;
echo "<script>    window.location = 'http://localhost/levoyageurv9natif/admin/clients.php';</script>";
				
					?><script language="javascript" type="text/javascript">
					alert("la modification est  rÃ©ussie !");
					</script>
					<?php

				
			}

			else{
				?>


				<?php
			}

			?>

		

		<!-- ================================= fin  le centenu du page ====================== -->

	</div>



</div>


</div>



  <?php
	include("footer.php"); 
}

?>

</body>
</html>