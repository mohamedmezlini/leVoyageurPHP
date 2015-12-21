<?php

	// connect to the database
	include('php/connect-db.php');
	
	// confirm that the 'id' variable has been set
	if (isset($_GET['id_nl']) )
	{
		// get the 'id' variable from the URL
		$id_nl = $_GET['id_nl'];
		
		// delete record from database
		if ($stmt = $mysqli->prepare("DELETE FROM newsletter WHERE id_nl = ? LIMIT 1"))
		{
			$stmt->bind_param("i",$id_nl);	
			$stmt->execute();
			$stmt->close();
		}
		else
		{
			echo "ERROR: could not prepare SQL statement.";
		}
		$mysqli->close();
		
		// redirect user after delete is successful
		header("Location: newsletters.php");
	}
	else
	// if the 'id' variable isn't set, redirect the user
	{
		header("Location: newsletters.php");
	}

?>
