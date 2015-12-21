




     


   


<?php

include('../php/connect-db.php');

if (isset($_POST['pays'])&&isset($_FILES["userfile"]) && !empty($_FILES["userfile"])) {
    $image = $_FILES['userfile']['tmp_name'];
    $imageName = $_FILES['userfile']['name'];
        //echo $_FILES['userfile']['name'];
    $imageSize = $_FILES['userfile']['size'];
    $imageType = $_FILES['userfile']['type'];
        //$imageCategory = $_POST['imageCategory'];


    $len = count($image);
    $path = "images/";
     $id_voy=$_POST['id_voy'];



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
                  

$stmt = $mysqli->prepare("UPDATE voyage SET pays= ?,image= ? ,ville_d= ?,ville_a= ? ,date_d= ?  ,date_a= ?  ,prix= ?,disponible= ?   WHERE id_voy = ?");
                    $stmt->bind_param("ssssssssi", $pays,$imageName[$i],$ville_d,$ville_a,$date_d ,$date_a,$prix,$disponible  ,$id_voy);
                    $stmt->execute();
                    $stmt->close();


                    header("location: voyages.php"); 

        }
    }
}
}
$mysqli->close();
//header("location: test.php"); 
?>

