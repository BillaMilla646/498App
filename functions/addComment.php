<?php
	require 'config.php';
	require 'connect.php';

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
	
	$chatName = $_POST("chatName");
	$comment = $_POST("comment");
	addComment(1, $chatID, $comment);
?>
