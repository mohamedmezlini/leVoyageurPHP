<!--==============================footer=================================-->
<footer class="container-fluid bg-danger alert alert-danger" >





	<section class="row">
		<div class=" col-lg-2 col-md-2  col-xs-12 col-sm-6 text-align ">









			<a class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><i class="fa fa-2x fa-facebook"></i></a>




			<a class="btn btn-social-icon btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-google']);"><i class="fa fa-2x   fa-google-plus"></i></a>

			<a class="btn btn-social-icon btn-instagram" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-instagram']);"><i class="fa fa-2x fa-instagram"></i></a>





			<a class="btn btn-social-icon btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><i class="fa fa-2x fa-twitter"></i></a>



		</div>




		<div class=" col-lg-4  col-md-4  col-xs-12 col-sm-6  ">
			<h2>les pages du site </h2>

			<p> <a href="#" class ="argent-color"> ABOUT </a></p>
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
