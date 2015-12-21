



<?php
session_start();

  

if (empty ($_SESSION['logged'])) { 

              
              header("Location: connexion.php");
            }



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
					
						<div class="col-xs-2 col-sm-2 col-md-2  col-lg-2 navbar-fixed-top sidebar-offcanvas text-align sidbar-social" id="sidebar" >
							<a class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><i class="fa fa-2x fa-facebook"></i></a>
							<a class="btn btn-social-icon btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-google']);"><i class="fa fa-2x   fa-google-plus"></i></a>
							<a class="btn btn-social-icon btn-instagram" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-instagram']);"><i class="fa fa-2x fa-instagram"></i></a>
							<a class="btn btn-social-icon btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><i class="fa fa-2x fa-twitter"></i></a>


						</div>
						<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">



<!-- *************************** zone de travail  -->


<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

						<h1 class="head1">Votre panier</h1>
					</div>



<div class="">
    <form method="post" action="cartupdatev.php">
        <table class="table">
        <thead>
        <tr>
        <th>Quantite</th>
        <th>Pays</th>
        <th>prix sans reduction</th>
        <th>Prix</th>
        <th>Total</th>
        <th>Suprimer</th>
        </tr>
        </thead>
          <tbody>
            <?php
    
    if(isset($_SESSION["cart_products"])) //check session var
    {
        $total = 0; //set initial total value
        $b = 0; //var for zebra stripe table 
        foreach ($_SESSION["cart_products"] as $cart_itm)
        {
            //set variables to use in content below
            $pays = $cart_itm["pays"];

            $product_qty = $cart_itm["product_qty"];
//dans le cas ou l'utilisateur n'est pas connecté 
            if(isset($_SESSION['nb_achat'])){
               $nb_achat=1; 
           }
           else {
               $nb_achat=$_SESSION['nb_achat'] ;
           }

           if ($nb_achat >19 || $product_qty>4) {

            $prix = $cart_itm["prix"] ;
            $prix=$prix-($prix/10);
            $subtotal = ($prix * $product_qty);
            

        }
        else {
           $prix = $cart_itm["prix"];
           $subtotal = ($prix * $product_qty);
       }




       $prix_sanssolde = $cart_itm["prix"];
       
       $id_voy = $cart_itm["id_voy"];
           // $product_color = $cart_itm["product_color"];
            //$subtotal = ($prix * $product_qty); //calculate Price x Qty
       
            $bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
            echo '<tr class="'.$bg_color.'">';
            echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$id_voy.']" value="'.$product_qty.'" /></td>';
            echo '<td>'.$pays.'</td>';
            echo '<td>'.$prix_sanssolde.'</td>';

            echo '<td>'.$prix.'</td>';

            echo '<td>'.$subtotal.'</td>';
            echo '<td><input type="checkbox" name="remove_code[]" value="'.$id_voy.'" /></td>';
            echo '</tr>';
            $total = ($total + $subtotal); //add subtotal to total var
        }
        

        $grand_total = $total ; //grand total including shipping cost
        
        
        
        
        
    }
    ?>
    <tr><td colspan="5"><span style="float:right;text-align: right;">Amount Payable : <?php echo sprintf("%01.2f", $grand_total);?></span></td></tr>
    <tr><td colspan="5"><a href="voyages.php" class="button">Ajouter plus de produits </a><button class="btn btn-warning" type="submit">Mettre à jour </button></td></tr>
</tbody>
</table>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>
</div>




<form role="form" action="validerpanier.php" method="post" >
    





  <input type="submit" name="valider panier" id="submit" value="validerpanier" class="btn btn-warning pull-right">



</form>



<!-- *************************** fin de zone de travail  ***********************-->






						</div>
                  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">



<!-- *************************** zone de travail  -->

  <div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

            <h1 class="head1">Historique</h1>
          </div>
           <?php include("front/historique.php");  ?>
        </div>



<?php 

include("front/news.php");
  ?>




</div>


<?php  
include("front/footer.php"); 
 ?>


</body>
</html>


