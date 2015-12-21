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

		<link href="css/font-awesome.mn.css" rel="stylesheet">

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
						<li class=""><a href="adminInscription.php">Les Inscriptions</a></li>
						<li class=""><a href="adminNewsletter.php">Les NewsLetter</a></li>
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

		<center><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1343.10877494584!2d10.103294243949549!3d36.807279333348696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smanouba+centre!5e0!3m2!1sfr!2sfr!4v1444902148156" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></center>

		<br><br><br>




  <!--small<div class="col-md-12">
    
	<div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>	  
    <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>
  </div>
  small-->














  <!--==============================Content=================================-->


  <!--==============================footer=================================-->

  <div class="container">
  	<h2>panier</h2>


  	<p><b>View All</b> | <a href="view-paginated.php">View Paginated</a></p>



  	<?php 
  	include('php/connect-db.php');
  	$today = date('Y-m-d');
  	$mod_date = strtotime($today."- 30 days");
  	echo date("Y-m-d",$mod_date) . "\n";





//mysqli_close($con);


echo "<br>";

$result2 = $mysqli->query("SELECT sum(total) as total FROM panier  WHERE  date_achat <= '".$today."' and date_achat >'".$mod_date."'   ");


//$result = $mysqli->query('select count(*) as `c` from `panier` ');
  	$sum = $result2->fetch_object()->total;
//$result->free();
//$mysqli->close();
  	echo "la somme est de   {$sum} dinars dans les 30 derneier jours";
echo "<br>";

  	$result = $mysqli->query("SELECT COUNT(*) as c FROM `panier`  WHERE  date_achat <= '".$today."' and date_achat >'".$mod_date."'   ");


//$result = $mysqli->query('select count(*) as `c` from `panier` ');
  	$count = $result->fetch_object()->c;
//$result->free();
//$mysqli->close();
  	echo "il y a  {$count} operation de vente dans les 30 dernier jours";




echo "<br>";
	







  	if ($result = $mysqli->query("SELECT * FROM panier "))
  	{
                                // display records if there are records to display
  		if ($result->num_rows > 0)
  		{
                                        // display records in a table
  			echo "<table class='table table-hover''>";

                                        // set table headers
  			echo "<tr> <th>ID pan</th>
  			<th>id client</th>
  			<th>ID voyage</th>
  			<th> pays</th>
  			<th>date_achat</th>
  			<th>prix</th>
  			<th>quantite</th>
  			<th>total</th>
  			</tr>";

  			while ($row = $result->fetch_object())
  			{
                                                // set up a row for each record
  				echo "<tr>";
  				
  				echo "<td>" . $row->id_pan . "</td>";
  				echo "<td>" . $row->id_clt . "</td>";
  				echo "<td>" . $row->id_voy . "</td>";
  				echo "<td>" . $row->pays . "</td>";
  					echo "<td>" . $row->date_achat . "</td>";
  				echo "<td>" . $row->prix . "</td>";
  				echo "<td>" . $row->quantite . "</td>";
  				echo "<td>" . $row->total . "</td>";
  				
  				  			



  				
  				echo "</tr>";
  			}

  			echo "</table>";
  		}
                                // if there are no records in the database, display an alert message
  		else
  		{
  			echo "No results to display!";
  		}
  	}
                        // show an error if there is an issue with the database query
  	else
  	{
  		echo "Error: " . $mysqli->error;
  	}

                        // close database connection
  	$mysqli->close();



  	?>
  </table>

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

	<!-- // -->
	<div class="container">

		<hr />
	</div>
</footer>
</html>









