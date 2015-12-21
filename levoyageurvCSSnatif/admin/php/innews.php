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


include("connect-db.php");


if(isset($_POST["submit"])){

// Check connection

$mail = htmlentities($_POST['mail'], ENT_QUOTES);

if ($stmt = $mysqli->prepare("INSERT newsletter (mail) VALUES (?)"))
				{
					$stmt->bind_param("s", $mail);
					$stmt->execute();
					$stmt->close();
					echo "<script type= 'text/javascript'>alert('vous etes enregistrer a la newsletter');</script>";

				}

else
				{
					echo "ERROR: Could not prepare SQL statement.";
				}



//echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";



}
?>
</body>
</html>