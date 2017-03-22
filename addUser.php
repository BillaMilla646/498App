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

?>
