



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

						<h1 class="head1"> les voyages  qui existent </h1>
					</div>
	<div class="  col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center  "  >

<?php 
  	$col1="Id"; 
	$col2="Pays";
    $col3="Images";
    $col4="V depart";
    $col5="V arrivé";
    $col6="Date départ";
    $col7="Date arrivé";
    $col8="Disponibilté";
    $col9="Prix";
    $col10="Ajouter";
echo <<<EOT




    				
											<form action="ajvoyage.php" method="POST"  enctype="multipart/form-data">

											<div class="form-group">
												<label for="nom3" class="col-lg-6 control-label">{$col2}</label>
												<div class="col-lg-6">
													<input type="text"class="form-control" name="pays" >							
												</div>
											</div>

                      <div class="form-group">
                        <label for="nom3" class="col-lg-6 control-label">{$col4}</label>
                        <div class="col-lg-6">
                          <input type="text"class="form-control" name="ville_d" required="required">             
                        </div>
                      </div>

                      
                        

											<div class="form-group">
												<label for="nom3" class="col-lg-6 control-label">{$col5}</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" name="ville_a"  required="required">							
												</div>
											</div>
											<div class="form-group">
												<label for="nom3" class="col-lg-6 control-label">{$col6}</label>
												<div class="col-lg-6">
													<input type="date"class="form-control" name="date_d"  required="required">							
												</div>
											</div>

											<div class="form-group">
												<label for="nom3" class="col-lg-6 control-label">{$col7}</label>
												<div class="col-lg-6">
													<input type="date"class="form-control" name="date_a" required="required">							
												</div>
											</div>



											<div class="form-group">
												<label for="nom3" class="col-lg-6 control-label">{$col8}</label>
												<div class="col-lg-6">
													<input type="number"class="form-control" name="disponible"  required="required">							
												</div>
											</div>

											<div class="form-group">
												<label for="nom3" class="col-lg-6 control-label">{$col9}</label>
												<div class="col-lg-6">
													<input type="text" name="prix"class="form-control"  required="required">							
												</div>
											</div>

											<div class="form-group">
												<label for="nom3" class="col-lg-6 control-label">{$col3}</label>
												<div class="col-lg-6">
													Send these files:<br />
													<p> <input  name="userfile[]"  class="form-control" type="file" multiple='multiple'  /> 							
													</div>
												</div>

												<div class="form-group">
													<div class="col-sm-12 pull-rigth">
														<input  class="btn btn-warning" type="submit" value="Modifer" />
													</div>
												</div>

												</form>


EOT;
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