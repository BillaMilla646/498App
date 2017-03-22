<?php
	require 'config.php';
	require 'connect.php';
	
	/********* Function verifies that entered password is correct for usernames *******/
	function subscribeToChatroom($userid, $chatroomid)
	{
		
				
			/****************** Add new chatroom *******************/
		$sql = "INSERT into Subscribes (UID, Chatroom_Id)
    	VALUES ('$UID', '$CID');";
		if ($_SESSION['db']->query($sql) === TRUE)
		{
    		echo  $userid . " subscribed to " . $chatroomid . " created successfully<br>";
		}
		 else
		{
    		echo "Error inserting: " . $userid . " into " . $chatroomid . $_SESSION['db']->error();
		} 
		$_SESSION['db']->close();
		
	
	}
	
	
?>
