



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
//include ("front/aprescarousel.php"); 


 ?>


			<!--==============================Content=================================-->
			
			<div class="container content-body">  
				
				<section class="row">
					<!--============================== Calendar =================================-->
					<div class="col-lg-12 col-md-12">
						<?php include("front/icons.php");  ?>


<!-- *************************************** zone de travail    ********************** -->


<?php
//session_start();
include_once("php/connect-db.php");
?>
<?php

if(isset($_POST["chercher"]))

{
$pays = htmlentities($_POST['pays'], ENT_QUOTES);

    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$today = date('Y-m-d');
$results = $mysqli->query("SELECT id_voy,disponible, pays, date_d, image, prix ,ville_a FROM voyage  WHERE pays = '".$pays."' and date_d >= '".$today."'");
if($results){ 
$products_item = '<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

						<h1 class="head1">Les voyages vers '.$pays.'</h1>
					</div> ';
//fetch results set as object and output HTML

$retourChario=0; // pour organiser les produit trois trois 

echo "<div classe='row'>";
while($obj = $results->fetch_object())
{
	if ($retourChario==3){
echo <<<EOT
</div>
<div classe="row">

EOT;
} 
else {
	$retourChario=$retourChario+1; 
}

$products_item .= <<<EOT
    
  

<div class="col-lg-4 col-md-4 col-xs-6  col-sm-4 ">
<div class=" col-lg-11 col-md-11 col-xs-11 col-sm-11 art-block">

    <div class="banner"> 
        <img  class=" img-responsive center-block img-thumbnail" src="images/{$obj->image}" alt="">
        <div class=" caption captionpanier">
            <div class="captionpanier">Pays {$obj->pays}</div> 
            <div class="captionpanier">Prix<span>{$obj->prix}</span></div>            
            <div class="captionpanier date">Date<span>{$obj->date_d}</span></div>
            <form method="post" action="cartupdatev.php">

               <fieldset>
                <label>
                    <span>Quantity</span>
                    <input type="text" size="2" maxlength="2" name="product_qty" value="1"  style="color: black;"/>
                </label>

            </fieldset>
            <input type="hidden" name="id_voy" value="{$obj->id_voy}" />
            <input type="hidden" name="type" value="add" />
            <input type="hidden" name="return_url" value="{$current_url}" />
            <button type="submit" class="  btn btn-warning  fa fa-shopping-cart" >Add</button>


			









        </form>

    </div> 
    				<a  data-toggle="modal"  data-target="#myvoya{$obj->id_voy}" style="text-decoration :none"> 
								voir détail
							</a>

							<!-- Modal -->
							<div class="modal fade" id="mymodal{$obj->id_voy}" tabindex="-1" role="dialog" aria-labelledby="myModalLabe">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabe">detail </h4>
										</div>

										<div class="modal-body">											



												<div class="form-group">
													<label for="nom3" class="col-sm-2 control-label">Description </label>
													<div class="captionpanier">Pays {$obj->pays}</div> 
            										<div class="captionpanier">Prix<span>{$obj->prix}</span></div>            
            										<div class="captionpanier date">Date<span>{$obj->date_d}</span></div>
													<p> voyage vers {$obj->pays}<br>
													
													Prix : {$obj->pays}<br>
													chaque opération d'achat sépeirire à 5 tichets, il y aura une remise 

													</p>
												</div>


												







										</div>
									</div>
								</div>
							</div>
									
</div>

</div>
</div>


EOT;
}
$products_item .= '';
echo $products_item;
}
}

else
        {
           $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$today = date('Y-m-d');
$results = $mysqli->query("SELECT id_voy,disponible, pays, date_d, image, prix ,ville_a FROM voyage  WHERE date_d > '".$today."'");;
if($results){ 
$products_item = '<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

						<h1 class="head1">Choisissez votre voyage  </h1>
					</div> ';


//l'affichage des obets 
$retourChario=0; 
echo "<div class='row'>";


while($obj = $results->fetch_object())
{

	if ($retourChario==3){
echo <<<EOT
</div>

<div class =" col-lg-12 col-md-12 col-xs-12 col-sm-12 "> 
<hr style="">
</div>
<div class="row">

EOT;
$retourChario=0; 

} 
else {
	$retourChario++; 
}

$products_item .= <<<EOT

   

<div class="col-lg-4 col-md-4 col-xs-6  col-sm-4 ">

<div class=" col-lg-11 col-md-11 col-xs-11 col-sm-11 art-block">
    <div class="banner"> 
        <img  class=" img-responsive center-block img-thumbnail" src="images/{$obj->image}" alt="">
        <div class=" caption captionpanier">
            <div class=" captionpanier "><label> Pays </label>{$obj->pays}</div>
            <div class=" captionpanier "><label>Prix</label><span>{$obj->prix}</span></div>            
            <div class="  captionpanier date"><label>Date</label><span>{$obj->date_d}</span></div>
            <form method="post" action="cartupdatev.php">

               <fieldset>
                <label>
                    <span>Quantity</span>
                    <input type="text" size="2" maxlength="2" name="product_qty" value="1" style="color: black;" />
                </label>

            </fieldset>
            <input type="hidden" name="id_voy" value="{$obj->id_voy}" />
            <input type="hidden" name="type" value="add" />
            <input type="hidden" name="return_url" value="{$current_url}" />
            <button type="submit" class="   btn btn-warning  fa fa-shopping-cart" >Add</button>
        </form>
    </div> 
</div>
</div>
</div>
EOT;
}

$products_item .= '';
echo $products_item;
        }
        if($retourChario!=3){
        	echo "</div>";
        }

}
?>




<!-- 
afficher la carte 
 -->









<!-- ***************************************fin  zone de travail    ********************** -->



















					
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

