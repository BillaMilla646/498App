<?php
	require 'config.php';
	require 'connect.php';
	
	/********* Function verifies that entered password is correct *******/
	function verifyChatroomEntrance($CID, $attemptPassword)
	{
		if ($attemptPassword === NULL)
		{
			echo 'No password entered';
			$sql = "SELECT Chatroom_Id FROM Chatrooms WHERE Password IS NULL AND Chatroom_Id = '$CID'";
			$matchedPasswordCids = $_SESSION['db']->select($sql);
			if (count($matchedPasswordCids) > 0)
			{
				echo "verified for '$CID'";
				$verified = TRUE;
			}
			else
			{
				$verified = FALSE;
			}
			return $verified;
		
		}
		else
		{
				
			/*****  Get the password from the database for the selected chatroom ****/
			$sql = "SELECT Chatroom_Id FROM Chatrooms WHERE Password = sha2('$attemptPassword', 256) AND
					Chatroom_Id = '$CID';";
			$matchedPasswordCids = $_SESSION['db']->select($sql);
			
			/**** If there is a count, we know the chatroom has that password ***/
			if (count($matchedPasswordCids) > 0)
			{
				$verified = TRUE;
				echo "Verified for '$CID'!";
				echo 'Password matches';
				
			}			
			else 
			{
				$verified = FALSE;
				echo "Incorrect password";
			}			
		}
	
	}
	

?>
