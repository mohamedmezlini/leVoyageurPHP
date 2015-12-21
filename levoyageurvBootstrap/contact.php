



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
include ("front/carousel.php"); 
include ("front/aprescarousel.php"); 


 ?>



	<!--==============================Content=================================-->

	<div class="container content-body">  

		<section class="row">
			<!--============================== Calendar =================================-->
			 <div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

            <h1 class="head1">Contact</h1>
          </div>


<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12">
  
  	<form role="form" action="" method="post" >
  		<div class="col-xs-10 col-sm-10 col-md-10  col-lg-10 ">
  			<div class="form-group">




  				<label for="InputName">Adresse Email</label>
  				<div class="input-group">
  					<input type="email"  class="form-control" name="mail" id="mail" placeholder="Enter votre mail" required>
  					<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
  				</div>

  				<div class="form-group">
  					<label for="InputEmail">objet du mail</label>
  					<div class="input-group">
  						<input  type="text" class="form-control" id="InputEmail" name="objet" placeholder="Enter l objet" required  >
  						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
  					</div>


  					<div class="form-group">
  						<label for="InputMessage">sujet</label>
  						<div class="input-group"
  						>
  						<textarea name="sujet" id="sujet" class="form-control" rows="5" required></textarea>
  						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
  					</div>
  					
  					<!--<input  type="hidden" value="1" class="form-control" id="InputEmail" name="idclt" placeholder="Enter idclt" required  >-->






  					<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-warning pull-right">
  				</div>
  			</form>








  <?php


  include("php/connect-db.php");


  if(isset($_POST["submit"])){

// Check connection

  	$mail = htmlentities($_POST['mail'], ENT_QUOTES);

  	$objet = htmlentities($_POST['objet'], ENT_QUOTES);
  	$sujet = htmlentities($_POST['sujet'], ENT_QUOTES);
//$idclt = htmlentities($_POST['idclt'], ENT_QUOTES);
  	$idclt=$_SESSION['id_client'] ;
  	if ($stmt = $mysqli->prepare("INSERT contact (mail,objet,sujet,idclt) VALUES (?,?,?,?)"))
  	{
  		$stmt->bind_param("ssss", $mail,$objet,$sujet,$idclt);
  		$stmt->execute();
  		$stmt->close();
  		echo "<script type= 'text/javascript'>alert('vous mail a ete envoyers');</script>";

  	}

  	else
  	{
  		echo "ERROR: Could not prepare SQL statement.";
  	}



//echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";



  }
  ?>


 




<?php 

include("front/news.php");
  ?>


					
				</section>



</div>


<?php  
include("front/footer.php"); 
 ?>


</body>
</html>

