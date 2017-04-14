<?php
	require 'config.php';
	require 'connect.php';

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

	$chatRoom = $_POST["chatName"];
        $password = $_POST["psw"];

//	if (isset($_POST['submit']))
//	{
	//	header("Location:www.ggogle.com");
		addChatroom($chatRoom, $password);	
//	}
?>	
