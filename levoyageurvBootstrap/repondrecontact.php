<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	<meta charset="utf-8">


	<meta name="format-detection" content="telephone=no" />
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico" />


	<link rel="stylesheet" href="booking/css/booking.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/voyageur.css">



	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<script src="js/jquery.mobilemenu.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/camera.js"></script>



	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<!--<![endif]-->
	<script src="booking/js/booking.js"></script>
	<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
			owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
			});
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>



		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
		<!--==============================header=================================-->
		
		<nav class="  navbar navbar-default navbar-fixed-top nav-menu-milieu" >
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brand</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a  href="#">ABOUT <span class="sr-only">(current)</span></a></li>
						<li class=""><a href="#">HOT TOUR</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOS OFFRES <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">OFFRE 1</a></li>
								<li><a href="#">OFFRE 2</a></li>
								<li><a href="#">OFFRE 3</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">OFFRE 4</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">OFFRE SPECIALE</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Chercher</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">S'inscrire</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><label > Connectez Vous  </label></li>
								<li><input type="text" name="log-in" value="votre nom utilisateur"> </li>
								<li><input type="text" name="pwd" value="mot de passe"> </li>
								<li role="separator" class="divider"> <button> Connexion</button> </li>
								<li><a href="#">Mot de passe Oublié</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>








<br><br><br><br><br><br>

		



<div class="container">
<div class="row">
  <!--small<div class="col-md-12">
    
	<div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>	  
    <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>
  </div>
small-->



<center>
  <form role="form" action="" method="post" >
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
     
 






      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
    </div>
  </form>

  </center>
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
</div>

</div>








			<!--==============================Content=================================-->
			
			
			<!--==============================footer=================================-->
			

			</body>

<footer>
			<!-- Social Footer, Colour Matching Icons -->
<!-- Include Font Awesome Stylesheet in Header -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<!-- // -->
<div class="container">
<h3></h3>
    <hr>
        <div class="text-center center-block">
           
            <br />
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
   
</div>



<!-- Social Footer, Single Coloured -->
<!-- Include Font Awesome Stylesheet in Header -->
<link href="css/font-awesome.mn.css" rel="stylesheet">
<!-- // -->
<div class="container">

    <hr />
</div>
</footer>
			</html>















<?php 

include("php/connect-db.php");



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
			if (is_numeric($_GET['idclt']))
			{
				// get variables from the URL/form
				$idclt = $_GET['idclt'];
				$mail = htmlentities($_POST['mail'], ENT_QUOTES);

                $objet = htmlentities($_POST['objet'], ENT_QUOTES);
                $sujet = htmlentities($_POST['sujet'], ENT_QUOTES);
				
				// check that firstname and lastname are both not empty
				
				
					// if everything is fine, update the record in the database
					if ($stmt = $mysqli->prepare("INSERT contact (mail,objet,sujet,idclt) VALUES (?,?,?,?)"))
					{
						$stmt->bind_param("ssss", $mail,$objet,$sujet,$idclt);
						$stmt->execute();
						$stmt->close();
						header('Location: contact.php'); 
					}
					// show an error message if the query has an error
					
					
					// redirect the user once the form is updated
					
				echo "<script>    window.location = 'http://localhost/bootstrap/admincontact.php';</script>";
			}
			// if the 'id' variable is not valid, show an error message
			else
			{
				echo "Error!";
			}
		}
		// if the form hasn't been submitted yet, get the info from the database and show the form
		
	}



        /*

           NEW RECORD

        */
	// if the 'id' variable is not set in the URL, we must be creating a new record
	
	
	// close the mysqli connection
	$mysqli->close();
?>