


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
	
<div class=" row">
	<div class="  col-xs-offset-11 col-md-offset-11 col-lg-offset-11 navbar-fixed-top " id="panier" >
							<a href="../panier.php" class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><i class="fa fa-3x fa-shopping-cart"></i></a>
						</div>



</div>

<div class=" row" style =" margin-top: 53px;"
>
<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

						<h1 class="head1"> les voyages  qui existent </h1>
					</div>
	<div class="   "  >

		

		<!-- ================================= le centenu du page ====================== -->

























		

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