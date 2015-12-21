<?php

	// connect to the database
	include('../php/connect-db.php');
	
	// confirm that the 'id' variable has been set
	if (isset($_GET['id_client']) )
	{
		// get the 'id' variable from the URL
		$id_client = $_GET['id_client'];
		
		// delete record from database
		if ($stmt = $mysqli->prepare("DELETE FROM client WHERE id_client = ? LIMIT 1"))
		{
			$stmt->bind_param("i",$id_client);	
			$stmt->execute();
			$stmt->close();
		}
		else
		{
			echo "ERROR: could not prepare SQL statement.";
		}
		$mysqli->close();
		
		// redirect user after delete is successful
		header("Location: clients.php");
	}
	else
	// if the 'id' variable isn't set, redirect the user
	{
		header("Location: clients.php");
	}

?>
