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
<label>saisissez votre email :</label>
<input type="text" name="mail" id="mail" required="required" placeholder="Please Enter email"/><br /><br />

<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
<!-- Right side div -->
<div id="formget">
<a href=http://www.formget.com/app><img src="formget.jpg" alt="Online Form Builder"/></a>
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

$sql = "INSERT INTO newsletter (mail)
VALUES ('".$_POST["mail"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('vous etes enregistrer a la newsletter');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>