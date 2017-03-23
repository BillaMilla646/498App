<?php
	require 'config.php';
	require 'connect.php';
	
	/********* Function verifies that entered password is correct *******/
	function getChatroomComments($CID, $UID)
	{
		/***** Verify that the user is subscribed to the chatroom *****/
		//$sql = "SELECT Name, Comment FROM Users INNER JOIN Comments WHERE Chatroom_Id = '$CID';";
		//$chatroomComments = $_SESSION['db']->select($sql);
		
		/*****  Get the comments for the selected chatroom ****/
			$sql = "SELECT Name, Comment FROM Users INNER JOIN Comments WHERE Chatroom_Id = '$CID' AND UID = User_Id;";
			$chatroomComments = $_SESSION['db']->select($sql);
			
			/**** If there is a count, we know the user has subscribed to chatrooms ***/
			if (count($chatroomComments) > 0)
			{
				
				//echo "WTF MATE";
				//echo count($matchedChatrooms);
				for ($i = 0; $i < count($chatroomComments); ++$i) {
        			echo $chatroomComments[$i]['Name'];
        			echo "<br>";
        			echo $chatroomComments[$i]['Comment'];
        			echo "<br>";
    			}
				
			}			
			else 
			{
				$hasSubscribed = FALSE;
				echo "No comments for this chatroom	";
			}			
	
	}
	
	getChatroomComments(1,1);
	

?>