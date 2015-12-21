




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

						<h1 class="head1">   repondre utilisateur </h1>
					</div>
	<div class="  content-body "  >



  <form role="form" action="reponsecl.php" method="post" >
    <div class="col-lg-6">
      <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok form-control-feedback"></i> Required Field</strong></div>
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
     
 






      <input type="submit" name="submit" id="submit" value="Repondre" class="btn btn-info pull-right">
    </div>
  </form>

  
  <br><br><br><br>
  <hr class="featurette-divider hidden-lg">
  <div class="col-lg-5 col-md-push-1">
    <address>
    <h3>adresse</h3>
    <p class="lead"><a href="https://www.google.com/maps/preview?ie=UTF-8&q=The+Pentagon&fb=1&gl=us&hq=1400+Defense+Pentagon+Washington,+DC+20301-1400&cid=12647181945379443503&ei=qmYfU4H8LoL2oATa0IHIBg&ved=0CKwBEPwSMAo&safe=on">le voyageur<br>
</a><br>
      Phone: +216 75 85 84 86<br>
      Fax: +2016 74 85 89 63</p>
    </address>
  </div>
















		

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
























































<?php 

include("../php/connect-db.php");



        /*

           EDIT RECORD

        */
	// if the 'id' variable is set in the URL, we know that we need to edit a record
	if (isset($_GET['idclt']))
	{
		// if the form's submit button is clicked, we need to process the form
		if (isset($_POST['submit']))
		{
			// make sure the 'id' in the URL is valid
			if (is_numeric($_GET['idclt'])&&is_numeric($_GET['id_con']))
			{
				// get variables from the URL/form
				$idclt = $_GET['idclt'];
				$id_con = $_GET['id_con'];
				echo $id_con;
				$mail = htmlentities($_POST['mail'], ENT_QUOTES);

                $objet = htmlentities($_POST['objet'], ENT_QUOTES);
                $sujet = htmlentities($_POST['sujet'], ENT_QUOTES);
				$etat  = "reponse!";
				// check that firstname and lastname are both not empty
				
				
					// if everything is fine, update the record in the database
					if ($stmt = $mysqli->prepare("INSERT contact (mail,objet,sujet,idclt,etat) VALUES (?,?,?,?,?)"))
					{
						$stmt->bind_param("sssss", $mail,$objet,$sujet,$idclt,$etat);
						$stmt->execute();
						$stmt->close();


                            $etat1  = "lu!";
						$stmt = $mysqli->prepare("UPDATE contact SET etat= ?    WHERE id_con = ?");
                    $stmt->bind_param("si", $etat1,  $id_con);
                    $stmt->execute();
                    $stmt->close();

						//header('Location: contact.php'); 
					}
					// show an error message if the query has an error
					
					
					// redirect the user once the form is updated
					
				echo "<script>    window.location = 'http://localhost/levoyageurv9/admin/contacts.php';</script>";
			}
			// if the 'id' variable is not valid, show an error message
			else
			{
				echo "Error!";
			}
		}
	}

	$mysqli->close();
?>