<?php
	require 'config.php';
	require 'connect.php';
	
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
	$email = $_POST["email"];
        $password = $_POST["psw"];

        $verified = verifyUsername($email, $password);
        if (isset($_POST['submit']) && $verified)
    {

        header("Location:http://ctma226.netlab.uky.edu/498App/src/StudyBuddyHomePage.html");


    }
	else
{
	 header("Location:http://ctma226.netlab.uky.edu/498App/src/index.html");
}
	
?>
