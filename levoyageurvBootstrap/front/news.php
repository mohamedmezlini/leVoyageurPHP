
<section class="row">

			<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

				<h1 class="head1">Latest News</h1>
			</div>





<?php
//session_start();
include_once("php/connect-db.php");
?>
<?php


    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$today = date('Y-m-d');
$results = $mysqli->query("SELECT id_voy,disponible, pays, date_d, image, prix ,ville_a, ville_d FROM voyage  WHERE  date_d >= '".$today."' ORDER BY prix");
if($results){ 
$products_item = '';
//fetch results set as object and output HTML

$retourChario=0; // pour organiser les produit trois trois 


while($obj = $results->fetch_object() )
{
	if ($retourChario<4){




$products_item .= <<<EOT
    
			<div class="col-lg-3 col-md-3 col-xs-12 col-sm-6  " >
				<div class="art-block" >
					<time datetime="{$obj->date_d}">{$obj->date_d}</span></time>
					<div style="
					background-color: #EAD3B8;
					">
					<div class="" style="
					background-color: #FF9F2D;
					"><a href="#">{$obj->pays}</a></div>
					Voyage de {$obj->ville_d} vers {$obj->ville_a}. Avec un prix favorable {$obj->prix} et chaque achat de plus de 5 tickets il y aura une réduction.
					<img class=" img-responsive img-thumbnail" src="images/{$obj->image}" alt="">

				</div>
			</div>
		</div>




EOT;
$retourChario=$retourChario+1;
} 

}
$products_item .= '';
echo $products_item;
}
?>









		










</section>
