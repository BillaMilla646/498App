<?php
	require 'config.php';
	require 'connect.php';

	/************ This function will be used to delete a comment ********/
	function deleteComment($UID, $CID, $COMID)
	{
		/****************** Add new chatroom *******************/
		$sql = "DELETE from Comments WHERE User_ID = $UID AND Chatroom_Id = $CID AND Comment_Id = $COMID;";
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
		

?>
