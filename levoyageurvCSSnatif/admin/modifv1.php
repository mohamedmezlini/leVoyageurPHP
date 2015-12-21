


<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <title> index 1</title>

  <meta charset="utf-8">

  <?php 
   include("header.php"); 

   ?>

</head>
<body>
<?php 

if (empty ($_SESSION['logged'])) {
  exit(header("Location:connexion.php")); 
  
} 
else {

  if ($_SESSION['role']==0){
    exit(header("Location:../index.php"));
  }

  include("nav.php"); 

  ?>


<!-- ============================================  le contenu du site ==================================-->
<div class=" container  content-body">


<div class=" row" style =" margin-top: 53px;"
>
<div class=" col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">

            <h1 class="head1"> Modifier Voyage </h1>
          </div>
  <div class="   col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center "  >


  <?php
  include('php/connect-db.php');
  if(isset($_GET['id_voy'])){
    $id_voy=$_GET['id_voy'];
    echo $id_voy;
//$requet = "SELECT * FROM client where id_client='".$id_client."'";
    $result = $mysqli->query("SELECT * FROM voyage where id_voy='".$id_voy."'");
    $row = $result->fetch_assoc();
    $pays = $row['pays'];
    $image = $row['image'];
    $date_d = $row['date_d'];
    $date_a = $row['date_a'];
    $ville_d = $row['ville_d'];
    $ville_a = $row['ville_a'];
    $disponible = $row['disponible'];
    $prix = $row['prix'];



  // $ligne = mysql_fetch_array($result);

    ?>
    
     
    <form action="" method="post" enctype="multipart/form-data">
      
      pays: <input class="col-lg-6"type="text" name="pays" value="<?php echo $pays;?>"><br>
      date debut: <input class="col-lg-6" type="date" name="date_d" value="<?php echo $date_d;?>"><br>
      date arivee: <input class="col-lg-6" type="date" name="date_a" value="<?php echo $date_a;?>"><br>
      ville debut: <input  class="col-lg-6"type="text" name="ville_d" value="<?php echo $ville_d;?>"><br>
      ville arrivée: <input class="col-lg-6" type="text" name="ville_a" value="<?php echo $ville_a;?>" ><br>
      prix: <input  class="col-lg-6" type="text" name="prix" value="<?php echo $prix;?>" ><br>
      disponibilite: <input class="col-lg-6"  type="number" name="disponible" value="<?php echo $disponible;?>" ><br>
      Send these files:<br />


      <p> <input  name="userfile[]" type="file" multiple='multiple' /> </p>


      <input  type="submit" value="Send files" />
  </form>


  <?php
}
?>



<?php


?>


<?php

include('php/connect-db.php');

if (isset($_POST['pays'])&&isset($_FILES["userfile"]) && !empty($_FILES["userfile"])) {
    $image = $_FILES['userfile']['tmp_name'];
    $imageName = $_FILES['userfile']['name'];
        //echo $_FILES['userfile']['name'];
    $imageSize = $_FILES['userfile']['size'];
    $imageType = $_FILES['userfile']['type'];
        //$imageCategory = $_POST['imageCategory'];

//echo $image;
    $len = count($image);
    $path = "images/";



    $ville_d = htmlentities($_POST['ville_d'], ENT_QUOTES);
    $ville_a = htmlentities($_POST['ville_a'], ENT_QUOTES);
    $date_d = htmlentities($_POST['date_d'], ENT_QUOTES);
    $date_a = htmlentities($_POST['date_a'], ENT_QUOTES);
    $prix = htmlentities($_POST['prix'], ENT_QUOTES);
    $disponible = htmlentities($_POST['disponible'], ENT_QUOTES);
    $pays = htmlentities($_POST['pays'], ENT_QUOTES);
    for ($i = 0; $i < $len; $i++) {
       if (isset($imageName[$i]) && $imageName[$i] !== NULL) {
           if(move_uploaded_file($image[$i], $path.$imageName[$i])) {
            echo $imageName[$i];

                    //$result = $mysqli->query("INSERT INTO images (Name, size, type) VALUES ('$imageName[$i]',  '$imageSize[$i]' , '$imageType[$i]' )");

             //$result = $mysqli->query("INSERT INTO voyage (pays,image,ville_d,ville_a,date_d,date_a,prix,disponible) VALUES ('$pays','$imageName[$i]' ,'$ville_d','$ville_a','$date_d','$date_a','$prix','$disponible')");

             // $stmt = $mysqli->prepare("DELETE FROM voyage WHERE id_voy = ?");
            // $stmt->bind_param('i', $id_voy);
           // $stmt->execute(); 
           // $stmt->close();



                  //$result = $mysqli->query("INSERT INTO voyage (id_voy,pays,image,ville_d,ville_a,date_d,date_a,prix,disponible) VALUES ('$id_voy','$pays','$imageName[$i]' ,'$ville_d','$ville_a','$date_d','$date_a','$prix','$disponible')");

   $stmt = $mysqli->prepare("UPDATE voyage SET pays= ?,image= ? ,ville_d= ?,ville_a= ? ,date_d= ?  ,date_a= ?  ,prix= ?,disponible= ?   WHERE id_voy = ?");
                    $stmt->bind_param("ssssssssi", $pays,$imageName[$i],$ville_d,$ville_a,$date_d ,$date_a,$prix,$disponible  ,$id_voy);
                    $stmt->execute();
                    $stmt->close();




                    //header("location: adminvoyage.php"); 

        }
    }
}
}
$mysqli->close();
//header("location: test.php"); 
?>
  <!-- ================================= fin  le centenu du page ====================== -->

  </div>



</div>


</div>



  <?php
  include("footer.php"); 
}

?>

</body>
</html>