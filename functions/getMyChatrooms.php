<?php
	require 'config.php';
	require 'connect.php';
	
	/********* Function verifies that entered password is correct for usernames *******/
	function getMyChatrooms($userid)
	{
				
		/*****  Get the User_Id from the database for the selected Email ****/
			$sql = "SELECT Chatroom_Id FROM Subscribes WHERE UID = '$userid';";
			$matchedChatrooms = $_SESSION['db']->select($sql);
			
			/**** If there is a count, we know the user has subscribed to chatrooms ***/
			if (count($matchedChatrooms) > 0)
			{
				$hasSubscribed = TRUE;
				//echo "WTF MATE";
				//echo count($matchedChatrooms);
				for ($i = 0; $i < count($matchedChatrooms); ++$i) {
        			echo $matchedChatrooms[$i]['Chatroom_Id'];
    			}
				
			}			
			else 
			{
				$hasSubscribed = FALSE;
				echo "No chatrooms for user $userid";
			}			
		
	
	}
	getMyChatrooms(1);
	getMyChatrooms(2);

	
	
?>
