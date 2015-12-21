<?php

	// connect to the database
	include('php/connect-db.php');
	
	// confirm that the 'id' variable has been set
	if (isset($_GET['id_con']) && is_numeric($_GET['id_con']))
	{
		// get the 'id' variable from the URL
		$id_con = $_GET['id_con'];
		
		// delete record from database
		if ($stmt = $mysqli->prepare("DELETE FROM contact WHERE id_con = ? LIMIT 1"))
		{
			$stmt->bind_param("i",$id_con);	
			$stmt->execute();
			$stmt->close();
		}
		else
		{
			echo "ERROR: could not prepare SQL statement.";
		}
		$mysqli->close();
		
		// redirect user after delete is successful
		header("Location: contacts.php");
	}
	else
	// if the 'id' variable isn't set, redirect the user
	{
		header("Location: contacts.php");
	}

?>
