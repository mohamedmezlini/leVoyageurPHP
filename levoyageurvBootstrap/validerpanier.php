<?php
session_start();
include('php/connect-db.php');

if(isset($_SESSION["cart_products"])) //check session var
{
        $total = 0; //set initial total value
        $b = 0; //var for zebra stripe table 
        foreach ($_SESSION["cart_products"] as $cart_itm)
        {
            //set variables to use in content below
            $pays = $cart_itm["pays"];
            //echo $pays;

            $id_clt=$_SESSION['id_client'] ;
            $nb_achat=$_SESSION['nb_achat'] ;
            //echo '<br>';
           // echo  $id_clt ; 
            //echo '<br>';
            $product_qty = $cart_itm["product_qty"];
            

            $prix = $cart_itm["prix"];
            $id_voy = $cart_itm["id_voy"];
           // $product_color = $cart_itm["product_color"];
             //calculate Price x Qty

            if ($nb_achat > 19 && $product_qty>4) {
             $prix = $cart_itm["prix"] ;
            $prix=$prix-($prix/10);
            $subtotal = ($prix * $product_qty);

         }
         else {
            

            $prix = $cart_itm["prix"];
             $subtotal = ($prix * $product_qty);
            }



            //$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 

            //echo '</tr>';
            $total = ($total + $subtotal); //add subtotal to total var

           // echo $total;


   //$result4 = $mysqli->query("SELECT * FROM `client` WHERE id_client = '".$id_clt."' ");
            //$row = $result4->fetch_assoc();
           // $nb_achat = $row['nb_achat'];

            echo $nb_achat;



            $result1 = $mysqli->query("SELECT * FROM `compte` WHERE id_clt = '".$id_clt."' ");
            $row = $result1->fetch_assoc();
            $solde = $row['solde'];

            //echo $solde;
            if($solde>=$total){
                $result1 = $mysqli->query("SELECT * FROM `voyage` WHERE id_voy = '".$id_voy."' ");

                $row = $result1->fetch_assoc();
                $disponible = $row['disponible'];



                if ($disponible>=$product_qty){



                    $nb_achat=$nb_achat+1;

                        //$subtotal=$subtotal-($subtotal/10);
                    $today = date('Y-m-d');


                    $result = $mysqli->query("INSERT INTO panier ( id_clt,id_voy,quantite, prix, pays,total,date_achat) VALUES ( '$id_clt' ,'$id_voy','$product_qty' , 
                       '$prix' ,'$pays','$subtotal','$today')");
                //echo "'<centre><strong>'votre operation d' achat a ete enregister</centre>";



                    $solde=$solde-$total;





                    $disponible=$disponible-$product_qty;

                    $stmt = $mysqli->prepare("UPDATE client SET nb_achat= ?    WHERE id_client = ?");
                    $stmt->bind_param("si", $nb_achat,  $id_clt);
                    $stmt->execute();
                    $stmt->close();


                    $stmt = $mysqli->prepare("UPDATE voyage SET disponible = ?    WHERE id_voy = ?");
                    $stmt->bind_param("si", $disponible,  $id_voy);
                    $stmt->execute();
                    $stmt->close();



                    $stmt = $mysqli->prepare("UPDATE compte SET solde = ?    WHERE id_clt = ?");
                    $stmt->bind_param("si", $solde,  $id_clt);
                    $stmt->execute();
                    $stmt->close();






                    $nom=$_SESSION['nom'];

                    $id_clt1=$_SESSION['id_client'];
                    $prem= $_SESSION['prenom'];
                    $nbachat=$_SESSION['nb_achat'];
                    echo $_SESSION['id_client'];
                    echo $_SESSION['nom'];
                    echo $_SESSION['prenom'];

                    /*session_destroy();
                    session_start();*/
                    $_SESSION["cart_products"]=null;




 //echo $_SESSION['id_client'];
 //echo $_SESSION['nom'];


//echo $_SESSION['id_clt1'];
                    $_SESSION['id_client']=$id_clt1; 
                    $_SESSION['nom']=$nom;
                    $_SESSION['nb_achat']=$nb_achat;
                    $_SESSION['prenom']=$prem;
                    echo $_SESSION['id_client'];
                    echo $_SESSION['nom'];
                    echo  $_SESSION['prenom'];
                    echo "<br>";
                    echo "<a href='voyages.php'>acheter plus </a>";

 //header("Location: indv.php");
                    echo "<script type= 'text/javascript'>alert('votre achat est realiser ,votre nouveau solde est de :$solde');</script>";

                    
                }

                if ($disponible<$product_qty){

                    echo "<script type= 'text/javascript'>alert('quatité pas disponible');</script>";
                }

            }
            else 
                echo "<script type= 'text/javascript'>alert('vous n avez pas assez d argent');</script>";
        }
        
        
        $grand_total = $total ; //grand total including shipping cost
        
        echo '<br>';
        echo '<centre>';

        echo '</centre>';
        
        
    }
    ?>