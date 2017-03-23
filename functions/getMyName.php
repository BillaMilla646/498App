<?php
	require 'config.php';
	require 'connect.php';
	
	/********* Function searches for chatrooms according to the search *******/
	function getMyName($UID)
	{
				
		/*****  Get the chatroom names that fit search ****/
			$sql = "SELECT Name FROM Users WHERE UID = '$UID';";
			$myName = $_SESSION['db']->select($sql);
			
			/**** If there is a count, we know there are chatrooms that match the search ***/
			if (count($myName) > 0)
			{
				//echo count($matchedChatrooms);
				for ($i = 0; $i < count($myName); ++$i) {
        			//echo $matchedChatrooms[$i]['Chatroom_Id'];
					echo $myName[$i]['Name'];
    			
    			}
				
			}			
			else 
			{
				echo "No name for the following User_Id: $UID";
			}			
		
	
	}
	getMyName(1);
	
?>
