



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
include ("front/aprescarousel.php"); 


 ?>



	<!--==============================Content=================================-->

	<div class="container content-body">  

		<section class="row">
			<!--============================== Calendar =================================-->
			<div class="col-lg-8 col-md-8">
				<?php  include("front/icons.php");  ?>




























			</div>
			<?php  include("front/aside.php");  ?>
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

