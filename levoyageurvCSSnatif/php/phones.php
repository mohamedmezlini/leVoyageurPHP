<?php
	include("connexion.inc.php");
	//var_dump(file_get_contents("php://input"));
	//$data = json_decode(file_get_contents("php://input"));
	//$age=$data->age;

	

$q1=$conn->query("select * from phone" );
$users=array();
$first=mysqli_fetch_array($q1);
echo '[';
$premier["id"]=$first["id"];
	$premier["age"]=$first["age"];
	$premier["name"]=$first["name"];
	$premier["snippet"]=$first["snippet"];
echo Json_encode($premier);

while($output=mysqli_fetch_array($q1)){
	echo ",";
	$json["id"]=$output["id"];
	$json["age"]=$output["age"];
	$json["name"]=$output["name"];
	$json["snippet"]=$output["snippet"];

	echo Json_encode($json);
	
}
echo ']';
?>