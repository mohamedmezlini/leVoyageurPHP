





<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	<meta charset="utf-8">


	<meta name="format-detection" content="telephone=no" />
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico" />



	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/font-awesome.4.4.css">
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
						<li class="active"><a  href="#"   role="button" aria-haspopup="true" aria-expanded="false">ABOUT <span class="sr-only">(current)</span></a></li>
                         <li class=""><a href="Inscription.php"  role="button" aria-haspopup="true" aria-expanded="false">Inscription</a></li>
                          <li class=""><a href="Newsletter.php"  role="button" aria-haspopup="true" aria-expanded="false">Newsletter</a></li>
						<li class=""><a href="#"  role="button" aria-haspopup="true" aria-expanded="false">HOT TOUR</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOS OFFRES <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="ind.php">OFFRE 1</a></li>
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
					
					<ul class="nav pull-right">
						<li class="dropdown" id="menuLogin">
							
					
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>







</div>


<!--     formulaire -->
<script type="text/javascript" src="calendrier.js"></script>
	<script type="text/javascript" src="calendrier.js"></script>
	
<script language="JavaScript">

function check() {
	var msg = "";
 		 
		if (document.formulaire.value != "")	{
		indexAroba = document.formulaire.mail.value.indexOf('@');
		indexPoint = document.formulaire.mail.value.indexOf('.');
		
		if ((indexAroba < 0) || (indexPoint < 0) )		{
		document.formulaire.mail.style.backgroundColor = "#FF3300";
			msg += "Adresse email incorrecte\n";
		}
	}
	else	{
		document.formulaire.mail.style.backgroundColor = "#FF3300";
		msg += "Veuillez saisir votre mail.\n";
	}

	
	



	if (msg == "") return(true);
	else	{
		alert(msg);
		return(false);
	}
}

</script>
<center>
<h3><font color="#3a3a3a" size="+1">newsletter:</font></h3></center>
<br />
<center>

<table width="75%" height="409">
<form action="" method="post"  onsubmit="check();"   name="formulaire">
<!-- Formulaire d'ajout d'un client -->
 



<td height="38">
<font color="#000033" size="+1.5">E-mail :<font color="#FF0000" size="+1"> (*)</font></font></td><td><center>
<input name="mail" size="30"  onmousedown="javascript:couleur(this);" />
</center></td></tr>


<td><center>
  <input name="submit" type="submit" value="Envoyer"   /></center></td>
</tr></form>

</table></center>

<?php 


  include('php/connect-db.php');

if(isset($_POST['mail']) ){
/* -----------------------------------------------------------------------------------------------------------------------------*/
if(!empty($_POST['mail'])  ){
/* -----------------------------------------------------------------------------------------------------------------------------*/

$mail=$_POST['mail'];


/* -----------------------------------------------------------------------------------------------------------------------------*/
/* fonction pour verifier la syntaxe d'email */
function VerifierAdresseMail($adresse)  
{  
   $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';  
   if(preg_match($Syntaxe,$adresse))  
      return true;  
   else  
     return false;  
}
/* -----------------------------------------------------------------------------------------------------------------------------*/


if( VerifierAdresseMail($mail) ){
$mysqli->query("INSERT INTO newsletter(mail)VALUES ('".$mail."')");
/* -----------------------------------------------------------------------------------------------------------------------------*/
//if($query = mysql_query($insertSQL) ){

//header("location:index.php");

?><script language="javascript" type="text/javascript">
alert("l'ajout est réussie !");
</script>
//<?php

//}
}
}
}
//else{
//?>
//<script type="text/javascript">
//alert("l'ajout n'est pas effectué");
//</script>
//<?php 

//}

//?>








			<!--==============================Content=================================-->
			
			




























					</div>
					<div class="col-lg-6 col-md-6 ">
						<h3>Welcome</h3>
						<img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<p>Lorem ipsum dolor sit ere amet, consectetur ipiscin.</p>
							In mollis erat mattis neque facilisis, sit ametiol
						</div>
						<div class="clear cl1"></div>
						<p>Find the detailed description of this <span class="col1"><a href="http://blog.templatemonster.com/free-website-templates/" rel="dofollow">freebie</a></span> at TemplateMonster blog.</p>
						<p><span class="col1"><a href="http://www.templatemonster.com/category/travel-website-templates/" rel="nofollow">Travel Website Templates</a></span> category offers you a variety of designs that are perfect for travel sphere of business.</p>
						Proin pharetra luctus diam, a scelerisque eros convallis
						<h4>Clients’ Quotes</h4>
						<blockquote class="bq1">
							<img src="images/page1_img2.jpg" alt="" class="img_inner noresize fleft">
							<div class="extra_wrapper">
								<p>Duis massa elit, auctor non pellentesque vel, aliquet sit amet erat. Nullam eget dignissim nisi, aliquam feugiat nibh. </p>
								<div class="alright">
									<div class="col1">Miranda Brown</div>
									<a href="#" class="btn">More</a>
								</div>
							</div>
						</blockquote>
					</div>
				</section>

				<section class="row">
					<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

						<h1 class="head1">Latest News</h1>
					</div>


					<div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
						<div class="center-block">
							<time datetime="2014-01-01">10<span>Jan</span></time>
							<div class="extra_wrapper">
								<div class="text1 col1"><a href="#">Aliquam nibh</a></div>
								Proin pharetra luctus diam, any scelerisque eros convallisumsan. Maecenas vehicula egestas
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 ">
						<div class="center-block">
							<time datetime="2014-01-01">21<span>Jan</span></time>
							<div class="extra_wrapper">
								<div class="text1 col1"><a href="#">Etiam dui eros</a></div>
								Any scelerisque eros vallisumsan. Maecenas vehicula egestas natis. Duis massa elit, auctor non
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 ">
						<div class="center-block ">
							<time datetime="2014-01-01">15<span>Feb</span></time>
							<div class="extra_wrapper">
								<div class="text1 col1"><a href="#">uamnibh Edeto</a></div>
								Ros convallisumsan. Maecenas vehicula egestas venenatis. Duis massa elit, auctor non
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 ">
						<div class="center-block ">
							<time datetime="2014-01-01">15<span>Feb</span></time>
							<div class="extra_wrapper">
								<div class="text1 col1"><a href="#">uamnibh Edeto</a></div>
								Ros convallisumsan. Maecenas vehicula egestas venenatis. Duis massa elit, auctor non
							</div>
						</div>
					</div>
				</section>



			</div>
			<!--==============================footer=================================-->
			




					<div class=" col-lg-4  col-md-4  col-xs-12 col-sm-6  ">
						<h2>les pages du site </h2>

						<p> <a href="#" class ="argent-color"> ABOUT </a></p>
                        <p> <a href="#" class ="argent-color"> Inscription </a></p>
						<p> <a href="#" class ="argent-color"> HOT TRIP </a></p>
						<p> <a href="#"class ="argent-color"> NOS OFFRES </a></p>
					</div>
					<div class="col-lg-4  col-md-4  col-xs-12 col-sm-6 ">
						<div class="col-lg-10  col-md-10 col-xs-12 col-sm-10 ">
							<H2> CONTACTER NOUS</H2>
							<form class="form " id="formcontact">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Votre mail">
								</div><div class="form-group">
								<textarea class="form-control" placeholder="Votre message" rows="3"></textarea>
							</div>
							
							<button class=" pull-right btn btn-warning"> Envoyer </button>
						</form>
					</div>
					<div class=" col-lg-2  col-md-2  col-xs-12 col-sm-6 ">
						
					</div>				

				</section>
				<section class="row ">
					<div class=" col-lg-9 col-md-9  pull-right " >

						Your Trip (c) 2014 | <a href="#">Privacy Policy</a> | Website Template Designed by <a href="#"> MM</a>
					</div>
				</section>




			</footer>
			<script>
				$(function (){
					$('#bookingForm').bookingForm({
						ownerEmail: '#'
					});
				})
				$(function() {
					$('#bookingForm input, #bookingForm textarea').placeholder();
				});
			</script>

			<script src="js/jquery.js"></script>
			<!-- Preloader -->



			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap.min.js"></script>

			<!-- Plugin JavaScript -->
			<script src="js/jquery.easing.min.js"></script>
			<script src="js/jquery.fittext.js"></script>
			<script src="js/wow.min.js"></script>


		</body>
		</html>

