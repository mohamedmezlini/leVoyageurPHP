<html>
<head>
<title>insert data in database using mysqli</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="main">
<h1>Insert data into database using mysqli</h1>
<div id="login">
<h2>Student's Form</h2>
<hr/>
<form action="" method="post">
<label>saisissez votre nom :</label>
<input type="text" name="nom" id="nom" required="required" placeholder="entrer votre nom"/><br /><br />
<label>saisissez votre prenom :</label>
<input type="text" name="prenom" id="prenom" required="required" placeholder="entrer votre prenom"/><br /><br />
<label>saisissez votre adresse :</label>
<input type="text" name="adresse" id="adresse" required="required" placeholder="entrer votre adresse"/><br /><br />
<label>saisissez votre email :</label>
<input type="text" name="mail" id="mail" required="required" placeholder="entrer votre email"/><br /><br />
<label>saisissez votre telephone :</label>
<input type="text" name="tel" id="tel" required="required" placeholder="entrer votre telephone"/><br /><br />
<label>saisissez votre cin :</label>
<input type="text" name="cin" id="cin" required="required" placeholder="entrer votre cin"/><br /><br />
<label>saisissez votre login :</label>
<input type="text" name="login" id="login" required="required" placeholder="entrer votre login"/><br /><br />
<label>saisissez votre mdp :</label>
<input type="password" name="mdp" id="mdp" required="required" placeholder="entrer votre mdp"/><br /><br />

<input type="submit" value=" Valider " name="submit"/><br />
</form>
</div>

</div>
<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO client (nom,prenom,adresse,mail,tel,cin,login,mdp)
VALUES ('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["adresse"]."','".$_POST["mail"]."','".$_POST["tel"]."','".$_POST["cin"]."','".$_POST["login"]."','".$_POST["mdp"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('vous etes enregistré en tant que client');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>