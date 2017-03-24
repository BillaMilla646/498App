<?php
	require 'config.php';
	require 'connect.php';
	function addUser($email, $name, $password)
	{
		
		/****************** Add new user *******************/
		$sql = "INSERT into Users( Email, Name,  Password)
    	VALUES ('$email', '$name', sha2('$password', 256));";
		if ($_SESSION['db']->query($sql) === TRUE)
		{
    		echo "User" . $email . " created successfully<br>";
		}
		 else
		{
    		echo "Error inserting: " . $email . $_SESSION['db']->error();
		} 
//		echo "User " . $username . "\n";
//		echo "Testing";
		//return;
		$_SESSION['db']->close();
	}
	
	$email = $_POST["email"];
	$name = $_POST["username"];
	$password = $_POST["password"];
	
	addUser($email, $name, $password);
	if (isset($_POST['submit']))
    {   
    
		header("Location:http://ctma226.netlab.uky.edu/498App/src/StudyBuddyHomePage.html");      
    
    }
?>
