<?php
	require 'config.php';
	require 'connect.php';
	
	/********* Function searches for chatrooms according to the search *******/
	function searchForChatrooms($search)
	{
				
		/*****  Get the chatroom names that fit search ****/
			$sql = "SELECT Chatroom_Name FROM Chatrooms WHERE Chatroom_Name LIKE '%$search%';";
			$matchedChatrooms = $_SESSION['db']->select($sql);
			
			/**** If there is a count, we know there are chatrooms that match the search ***/
			if (count($matchedChatrooms) > 0)
			{
				//echo count($matchedChatrooms);
				for ($i = 0; $i < count($matchedChatrooms); ++$i) {
        			//echo $matchedChatrooms[$i]['Chatroom_Id'];
					echo $matchedChatrooms[$i]['Chatroom_Name'];
    			
    			}
				
			}			
			else 
			{
				echo "No chatrooms for the following search: $search";
			}			
		
	
	}
	searchForChatrooms('CS');
	echo "<br>";
	searchForChatrooms('EE');
	echo "<br>";
	searchForChatrooms('EN');
	echo "<br>";
	
	
?>
