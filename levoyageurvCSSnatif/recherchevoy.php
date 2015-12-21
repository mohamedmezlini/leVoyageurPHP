
<form action="" method="post">
<label>chercher votre billet d'avion par pays </label>
<input type="text" name="pays"  required="required" placeholder="entrer le pays "/><br /><br />

<input type="submit" value=" Submit " name="submit"/><br />
</form>
<?php
session_start();
include_once("php/connect-db.php");
?>

<div class="products">
<?php

if(isset($_POST["submit"]))

{
$pays = htmlentities($_POST['pays'], ENT_QUOTES);

    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$today = date('Y-m-d');
$results = $mysqli->query("SELECT id_voy,disponible, pays, date_d, image, prix ,ville_a FROM voyage  WHERE pays = '".$pays."' and date_d >= '".$today."'");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
    <li class="product">
    <form method="post" action="cartupdatev.php">
    pays <div class="product-content"><h3>{$obj->pays}</h3>

   
    image<div class="product-thumb"><img src="images/{$obj->image}"></div>
    date depart<div class="product-desc">{$obj->date_d}</div>
    
      disponible <div class="product-content"><h3>{$obj->disponible}</h3>
    <div class="product-info">
    prix {$obj->prix} 
  
    
    <fieldset>
    
    
    
    <label>
        <span>Quantity</span>
        <input type="text" size="2" maxlength="2" name="product_qty" value="1" />
    </label>
    
    </fieldset>
    <input type="hidden" name="id_voy" value="{$obj->id_voy}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" class="add_to_cart">Add</button></div>
    </div></div>
    </form>
    </li>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
}

else
        {
           $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$today = date('Y-m-d');
$results = $mysqli->query("SELECT id_voy,disponible, pays, date_d, image, prix ,ville_a FROM voyage  WHERE date_d > '".$today."'");;
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
    <li class="product">
    <form method="post" action="cartupdatev.php">
    pays <div class="product-content"><h3>{$obj->pays}</h3>

   
    image<div class="product-thumb"><img src="images/{$obj->image}"></div>
    date depart<div class="product-desc">{$obj->date_d}</div>
    
      disponible <div class="product-content"><h3>{$obj->disponible}</h3>
    <div class="product-info">
    prix {$obj->prix} 
  
    
    <fieldset>
    
    
    
    <label>
        <span>Quantity</span>
        <input type="text" size="2" maxlength="2" name="product_qty" value="1" />
    </label>
    
    </fieldset>
    <input type="hidden" name="id_voy" value="{$obj->id_voy}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" class="add_to_cart">Add</button></div>
    </div></div>
    </form>
    </li>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
        }

}
?>
</div>





<div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
    echo '<div class="cart-view-table-front" id="view-cart">';
    echo '<h3>Your Shopping Cart</h3>';
    echo '<form method="post" action="cartupdatev.php">';
    echo '<table width="100%"  cellpadding="6" cellspacing="0">';
    echo '<tbody>';

    $total =0;
    $b = 0;
    foreach ($_SESSION["cart_products"] as $cart_itm)
    {
        $pays = $cart_itm["pays"];
       
        $product_qty = $cart_itm["product_qty"];
         //$disponible = $cart_itm["disponible"];
        $prix = $cart_itm["prix"];
        //$nb_d = $cart_itm["nb_vendu"];
        $id_voy = $cart_itm["id_voy"];
        //$price = $cart_itm["prix"];
        //$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
        //echo '<tr class="'.$bg_color.'">';
        echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$id_voy.']" value="'.$product_qty.'" /></td>';
        echo '<td>'.$pays.'</td>';
        echo '<td><input type="checkbox" name="remove_code[]" value="'.$id_voy.'" /> Remove</td>';
        echo '</tr>';
        $subtotal = ($prix * $product_qty);
        $total = ($total + $subtotal);
    }
    echo '<td colspan="4">';
    echo '<button type="submit">Update</button><a href="viewcartv.php" class="button">voir detail</a>';
    echo '</td>';
    echo '</tbody>';
    echo '</table>';
    
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
    echo '</form>';
    echo '</div>';

}
?>
</div>