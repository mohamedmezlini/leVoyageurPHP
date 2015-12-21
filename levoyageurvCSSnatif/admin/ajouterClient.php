


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

						<h1 class="head1"> les utilisateurs  qui existent </h1>
					</div>
	<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center  "  >




					<form class="form-horizontal" method="post" action="inscription.php">

				<div class="modal-body">


			


						<div class="form-group">
							<label for="nom3" class="col-lg-6 control-label">Nom</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="nom3" placeholder="Nom" name="nom" required="required">
							</div>
						</div>

						<div class="form-group">
							<label for="prenom3" class="col-lg-6 control-label">Prénom</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="prenom3" placeholder="Prenom" name="prenom" required="required">
							</div>
						</div>

						<div class="form-group">
							<label for="login3" class="col-lg-6 control-label">login</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="login3" placeholder="Nom Utilisateur" name="login" required="required">
							</div>
						</div>

						<div class="form-group">
							<label for="inputEmail3" class="col-lg-6 control-label">Email</label>
							<div class="col-lg-6">
								<input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="Email" required="required">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-lg-6 control-label">Password</label>
							<div class="col-lg-6">
								<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="mdp" required="required">
							</div>
						</div>

						<div class="form-group">
                        <label for="nom3" class=" col-lg-6 control-label">Role</label>
                        	<div class="col-lg-6">
                          		<select class="" name="role" >
                              		<option value="0"> utilisateur</option>
                              		<option value="1"> administrateur</option>
                            	</select>
                          </div>
                      </div


						<div class="form-group">
							<label for="tel3" class="col-lg-6 control-label">tel</label>
							<div class="col-lg-6">
								<input type="tel" class="form-control" name="tel" id="tel3" placeholder="tel" required="required">
							</div>
						</div>


						<div class="form-group">
							<label for="cin3" class="col-lg-6 control-label">CIN</label>
							<div class="col-lg-6">
								<input type="number" class="form-control" name="cin" id="cin3" placeholder="CIN" required="required">
							</div>
						</div>


						<div class="form-group">
							<label for="adresse3" class="col-lg-6 control-label">Adresse</label>
							<div class="col-lg-6">
								<input type="text" name="adresse" class="form-control" id="Adresse3" placeholder="Adresse" required="required">
							</div>
						</div>


				





				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-warning">Ajouter</button>
				</div>
				
				</form>



				








		

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