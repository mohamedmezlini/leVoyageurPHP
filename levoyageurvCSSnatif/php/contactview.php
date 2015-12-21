<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	<meta charset="utf-8">


	<meta name="format-detection" content="telephone=no" />
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico" />


	<link rel="stylesheet" href="bootstrap/booking/css/booking.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/voyageur.css">



	<script src="bootstrap/js/jquery-migrate-1.2.1.js"></script>
	<script src="bootstrap/js/script.js"></script>
	<script src="bootstrap/js/superfish.js"></script>
	<script src="bootstrap/js/jquery.ui.totop.js"></script>
	<script src="bootstrap/js/jquery.equalheights.js"></script>
	<script src="bootstrap/js/jquery.mobilemenu.js"></script>
	<script src="bootstrap/js/jquery.easing.1.3.js"></script>
	<script src="bootstrap/js/owl.carousel.js"></script>
	<script src="bootstrap/js/camera.js"></script>



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










		<div id="myCarousel" class="carousel slide" data-ride="carousel" >
			<ol class="carousel-indicators olcarousel">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			</ol>
			<!-- Indicators -->
			<div class="carousel-inner" role="listbox">
				<div class="item active bg-primary">
					<img class="first-slide" src="images/slide.jpg" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h2>LONDON</h2>
							<div class="price">
								FROM
								<span>$1000</span>
							</div>
							<a href="#">LEARN MORE</a>   </div>
						</div>
					</div>
					<div class="item">
						<img class="second-slide" src="images/slide1.jpg" alt="Second slide">
						<div class="container">
							<div class="carousel-caption">
								<h2>Maldives</h2>
								<div class="price">
									FROM
									<span>$2000</span>
								</div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="item">
						<img class="third-slide" src="images/slide2.jpg" alt="Third slide">
						<div class="container">
							<div class="carousel-caption">
								<h2>Venice</h2>
								<div class="price">
									FROM
									<span>$1600</span>
								</div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>







			<!--==============================Content=================================-->
			
			<div class="container-fluid">  
				<section class="row image-superpose">

					<div class="col-lg-4 col-md-4 col-xs-6  col-sm-4 ">
						<div class="banner">
							<img class=" img-responsive img-thumbnail" src="images/ban_img1.jpg" alt="">
							<div class="caption">
								<div class="title">Barcelona</div>
								<div class="price">FROM<span>$ 1000</span></div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-6  col-sm-4 ">
						<div class="banner"> 
							<img  class=" img-responsive img-thumbnail" src="images/ban_img2.jpg" alt="">
							<div class="caption">
								<div class="title">GOA</div>
								<div class="price">FROM<span>$ 1.500</span></div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 hidden-xs  col-sm-4 ">
						<div class="banner">
							<img  class=" img-responsive img-thumbnail" src="images/ban_img3.jpg" alt="">
							<div class="caption">
								<div class="title">PARIS</div>
								<div class="price">FROM<span>$ 1.600</span></div>
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
				</section>
				<section class="row">
					<div class="col-lg-6 col-md-6">
						<h3>Booking Form</h3>
						<form id="form">
							<div class="fl1">
								<div class="tmInput">
									<input name="Name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
								</div>
								<div class="tmInput">
									<input name="Country" placeHolder="Country:" type="text" data-constraints="@NotEmpty @Required">
								</div>
							</div>
							<div class="fl1">
								<div class="tmInput">
									<input name="Email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
								</div>
								<div class="tmInput mr0">
									<input name="Hotel" placeHolder="Hotel:" type="text" data-constraints="@NotEmpty @Required">
								</div>
							</div>
							<div class="clear"></div>
							<strong>Check-in</strong>
							<label class="tmDatepicker">
								<input type="text" name="Check-in" placeHolder='10/05/2014' data-constraints="@NotEmpty @Required @Date">
							</label>
							<div class="clear"></div>
							<strong>Check-out</strong>
							<label class="tmDatepicker">
								<input type="text" name="Check-out" placeHolder='20/05/2014' data-constraints="@NotEmpty @Required @Date">
							</label>
							<div class="clear"></div>
							<div class="tmRadio">
								<p>Comfort</p>
								<input name="Comfort" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
								<span>Cheap</span>
								<input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Standart</span>
								<input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Lux</span>
							</div>
							<div class="clear"></div>
							<div class="fl1 fl2">
								<em>Adults</em>
								<select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option>1</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<div class="clear"></div>
								<em>Rooms</em>
								<select name="Rooms" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option>1</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="fl1 fl2">
								<em>Children</em>
								<select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option>0</option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<div class="clear"></div>
							<div class="tmTextarea">
								<textarea name="Message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
							</div>
							<a href="#" class="btn" data-type="submit">Submit</a>
						</form>
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
			<footer class="container-fluid bg-primary" >

				
				<section class="row">
					<div class=" col-lg-2 col-md-2  col-xs-12 col-sm-6 ">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>

					<div class=" col-lg-4  col-md-4  col-xs-12 col-sm-6  ">
						<h2>les pages du site </h2>

						<p> <a href="#" class ="argent-color"> ABOUT </a></p>
						<p> <a href="#" class ="argent-color"> HOT TRIP </a></p>
						<p> <a href="#"class ="argent-color"> NOS OFFRES </a></p>
					</div>
					<div class=" col-lg-4  col-md-4  col-xs-12 col-sm-6 ">
						<H2> CONTACTER NOUS</H2>
						<FORM>
							<p><label> Entrer votre mail </label> <input type="texte" value="e-mail" name="mail"></p>
							<p><label> Saisir votre texte </label> <input type="texteArea" value="ecrire votre sujet " name="mail"></p>
							<button > Envoyer </button>
						</FORM>
					</div>
					<div class=" col-lg-2  col-md-2  col-xs-12 col-sm-6 "></div>


				</div>

					</section>
				<section class="row ">
					<div class=" col-lg-12 col-md-12 " >
						
						Your Trip (c) 2014 | <a href="#">Privacy Policy</a> | Website Template Designed by <a href="#"> MM</a>
					</div></div>
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

