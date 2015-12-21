<?php 


  include('php/connect-db.php');

if(isset($_POST['mail']) ){
/* -----------------------------------------------------------------------------------------------------------------------------*/
if(!empty($_POST['mail'])  ){
/* -----------------------------------------------------------------------------------------------------------------------------*/

$mail=$_POST['mail'];


$mysqli->query("INSERT INTO newsletter(mail)VALUES ('".$mail."')");
/* -----------------------------------------------------------------------------------------------------------------------------*/
//if($query = mysql_query($insertSQL) ){

header("location:index.php");

?><script language="javascript" type="text/javascript">
alert("l'ajout est reussie !");
</script>
<?php 
}
}
?>