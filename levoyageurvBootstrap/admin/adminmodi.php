



























<?php 

//session_start();
  include('../php/connect-db.php');

if(isset($_POST['nom']) && isset($_POST['prenom']) &&  isset($_POST['adresse'])  && isset($_POST['mail']) && isset($_POST['tel'])&& isset($_POST['cin'])&& isset($_POST['login'])&& isset($_POST['mdp'])){
/* -----------------------------------------------------------------------------------------------------------------------------*/
if(!empty($_POST['nom'])  && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['mail']) && !empty($_POST['tel']) && !empty($_POST['cin']) && !empty($_POST['login']) && !empty($_POST['mdp'])){
/* -----------------------------------------------------------------------------------------------------------------------------*/

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];
$role=$_POST['role'];
$cin=$_POST['cin'];
$login=$_POST['login'];
$mdp=$_POST['mdp'];
$nb_achat=0;


/* -----------------------------------------------------------------------------------------------------------------------------*/
/* fonction pour verifier la syntaxe d'email */
function VerifierAdresseMail($adresse)  
{  
   $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';  
   if(preg_match($Syntaxe,$adresse))  
      return true;  
   else  
     return false;  
}
/* -----------------------------------------------------------------------------------------------------------------------------*/


if(is_numeric($cin) && is_numeric($tel) && VerifierAdresseMail($mail) ){

               $stmt = $mysqli->prepare("UPDATE client SET cin= ?,nom= ? ,prenom= ?,mail= ? ,adresse= ?  ,tel= ?,login= ?,mdp= ? ,role=?   WHERE id_client = ?");
                    $stmt->bind_param("sssssssssi", $cin,$nom,$prenom,$mail,$adresse ,$tel,$login,$mdp ,$role ,$id_client);
                    $stmt->execute();
                    $stmt->close();/* -----------------------------------------------------------------------------------------------------------------------------*/
//if($query = mysql_query($insertSQL) ){

header("location:index.php");

?>

<script language="javascript" type="text/javascript">
alert("l'ajout est réussie !");
</script>
<?php


//}
}
}
}
//else{
//?>

