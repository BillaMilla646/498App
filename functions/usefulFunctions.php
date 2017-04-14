<?php
	require 'config.php';
	require 'connect.php';
	function addUser($username, $password)
	{
		/****************** Add new user *******************/
		$sql = "INSERT into Users( Email, Password)
    	VALUES ('$username', sha2('$password', 256));";
		if ($_SESSION['db']->query($sql) === TRUE)
		{
    		echo "User" . $username . " created successfully<br>";
		}
		 else
		{
    		echo "Error inserting: " . $username . $_SESSION['db']->error();
		} 
//		echo "User " . $username . "\n";
//		echo "Testing";
		//return;
		$_SESSION['db']->close();
	}
	function addChatroom($newchatroom, $password)
	{
		/****************** Add new chatroom *******************/
		$sql = "INSERT into Chatrooms (Chatroom_Name, Password)
    	VALUES ('$newchatroom', sha2('$password', 256));";
		if ($_SESSION['db']->query($sql) === TRUE)
		{
    		echo "Chatroom" . $newchatroom . " created successfully<br>";
		}
		 else
		{
    		echo "Error inserting: " . $newchatroom . $_SESSION['db']->error();
		} 
		$_SESSION['db']->close();
	}
	/************ This function will be used to add a new comment ********/
	function addComment($UID, $CID, $newcomment)
	{
		/****************** Add new chatroom *******************/
		$sql = "INSERT into Comments (User_Id, Chatroom_Id, Comment)
    	VALUES ('$UID', '$CID', '$Comment');";
		if ($_SESSION['db']->query($sql) === TRUE)
		{
    		echo "Comment" . $newcomment . " created successfully<br>";
		}
		 else
		{
    		echo "Error inserting: " . $newcomment . $_SESSION['db']->error();
		} 
		$_SESSION['db']->close();
	}
	
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
	
	/********* Function verifies that entered password is correct for usernames *******/
	function verifyUsername($userEmail, $attemptPassword)
	{
		/*** If user does not enter a password ***/
		if ($attemptPassword === NULL)
		{
			echo 'No password entered';
			$verified = FALSE;		
		}
		/*** If user enters a password ***/
		else
		{
				
			/*****  Get the User_Id from the database for the selected Email ****/
			$sql = "SELECT UID FROM Users WHERE Password = sha2('$attemptPassword', 256) AND
					Email = '$userEmail';";
			$matchedPasswordUid = $_SESSION['db']->select($sql);
			
			/**** If there is a count, we know the user was matched ***/
			if (count($matchedPasswordUid) > 0)
			{
				$verified = TRUE;
				echo "Verified for '$userEmail'!";
				echo 'Password matches';
				
			}			
			else 
			{
				$verified = FALSE;
				echo "Incorrect username or password";
			}			
		}
		/*** Return whether user was verified ***/
		return $verified;

	
	}
	
	
	addUser('Test', 'Tester123');
	addChatroom('NewChat', 'Plswork');
		echo "<br><br>";

	verifyUsername('clay@StudyBuddy.com', 'Admin12345');
		echo "<br><br>";

	verifyUsername('clay@StudyBuddy.com', 'Admin1235');
	
	$test = verifyChatroomEntrance(4,'Plswork');
	echo "<br><br>";
	$test2 = verifyChatroomEntrance(2);

	echo "The value of test is: $test";
//	$_SESSION['db']->close();
?>
