<?php 

//session_start();
  include('php/connect-db.php');

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
if ($result=$mysqli->query("INSERT INTO client(nom ,prenom,adresse,mail,tel,cin,login,mdp,role,nb_achat)VALUES ('".$nom."','".$prenom."','".$adresse."','".$mail."','".$tel."','".$cin."','".$login."','".$mdp."','".$role."','".$nb_achat."')"));
/* -----------------------------------------------------------------------------------------------------------------------------*/
//if($query = mysql_query($insertSQL) ){


$solde=1000000;
$id_clt=888888888;
$result2=$mysqli->query("INSERT INTO compte(id_clt,solde)VALUES ('".$id_clt."','".$solde."')");



$result99 = $mysqli->query("SELECT * FROM `compte` ORDER BY id_cpt DESC LIMIT 1 ");
            $row = $result99->fetch_assoc();
            $id_cpt = $row['id_cpt'];
            echo $id_cpt;
            $id_clt =$id_cpt ;

$stmt = $mysqli->prepare("UPDATE compte SET id_clt = ?    WHERE id_cpt = ?");
	        $stmt->bind_param("si", $id_clt,  $id_cpt);
	        $stmt->execute();
	        $stmt->close();


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

