



<?php
session_start();

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
//include ("front/aprescarousel.php"); 


 ?>


			<!--==============================Content=================================-->
			
			<div class="container content-body">  
				
				<section class="row">
					<!--============================== Calendar =================================-->
					<div class="col-lg-12 col-md-12">
						<?php include("front/icons.php");  ?>
						<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

						<h1 class="head1">Créer votre compte</h1>
					</div>


											










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
													<label for="inputPassword3" class="col-lg-6 control-label">confirmer Password</label>
													<div class="col-lg-6">
														<input type="password" class="form-control" id="inputconfimPassword3" placeholder="confirmer Password" required="required">
													</div>
												</div>


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


												<div class="form-group">
													<label for="datenais3" class="col-lg-6 control-label">date Naissance</label>
													<div class="col-lg-6">
														<input type="date" class="form-control" name="date_nais" id="datenais3" placeholder="date Naissance" required="required">
													</div>
												</div>






										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-warning">Save</button>
										</div>
										
										</form>






					
				</section>

<?php 

include("front/news.php");
  ?>



</div>


<?php  
include("front/footer.php"); 
 ?>


</body>
</html>

