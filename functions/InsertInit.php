<?php
require 'config.php';
require 'connect.php';
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

/****************** Clear out users table ***************/
$sql = "TRUNCATE TABLE Users";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "Users deleted successfully<br>";
} else {
    echo "Error deleting Users: " . $_SESSION['db']->error();
}
/****************** Add default user Clay *******************/
$sql = "INSERT into Users( Email, Name, Password)
	VALUES ('clay@StudyBuddy.com', 'Clay Marshall', sha2('Admin12345', 256));";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "User Clay created successfully<br>";
} else {
    echo "Error creating Clay Users: " . $_SESSION['db']->error();
}
/****************** Add default user Test *******************/
$sql = "INSERT into Users (Email, Name, Password)
	VALUES ('test@StudyBuddy.com', 'Testing User', sha2('Test',256));";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "User Test created successfully<br>";
} else {
    echo "Error creating Test Users: " . $_SESSION['db']->error();
}

/****************** Clear out chatrooms *******************/
$sql = "TRUNCATE TABLE Chatrooms";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "Chatrooms deleted sucessfully<br>";
} else {
    echo "Error deleting chatrooms: " . $_SESSION['db']->error();
}
/****************** Add default Chatroom CS498 *******************/
 $sql = "INSERT into Chatrooms(Chatroom_Id, Chatroom_Name)
	VALUES (1, 'CS498 Study Buddy');";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "Chatroom CS498 created succesfully<br>";
} else {
    echo "Error inserting CS498: " . $_SESSION['db']->error();
}
 /****************** Add default Chatroom CS405 *******************/
 $sql = "INSERT into Chatrooms(Chatroom_Name)
	VALUES ('CS405 Study Databases');";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "Chatroom CS405 created succesfully<br>";
} else {
    echo "Error Creating CS405: " . $_SESSION['db']->error();
} 
/****************** Add default Chatroom EE221 *******************/
 $sql = "INSERT into Chatrooms(Chatroom_Name, Password)
	VALUES ('EE221', sha2('Circuits1',256));";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "Chatroom EE221 inserted carefully<br>";
} else {
    echo "Error creating chatrrom EE221: " . $_SESSION['db']->error();
} 
/****************** Clear out Comments *******************/
$sql = "TRUNCATE TABLE Comments";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "Comments deleted sucessfully<br>";
} else {
    echo "Error deleting comments: " . $_SESSION['db']->error();
}
/****************** Add comment in CS498 *******************/
 $sql = "INSERT into Comments(User_Id, Chatroom_Id, Comment, Number_Of_Likes)
	VALUES (1, 1, 'Look I can Make a comment', 2);";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "First Comment inserted succesfully<br>";
} else {
    echo "Error inserting comment: " . $_SESSION['db']->error();
} 
/****************** Add comment in CS498 *******************/
 $sql = "INSERT into Comments(User_Id, Chatroom_Id, Comment, Number_Of_Likes)
	VALUES (2, 1, 'Wow that is awesome!', 0);";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "First Comment inserted succesfully<br>";
} else {
    echo "Error inserting comment: " . $_SESSION['db']->error();
} 
/****************** Add comment in CS498 *******************/
 $sql = "INSERT into Comments(User_Id, Chatroom_Id, Comment, Number_Of_Likes)
	VALUES (1, 1, 'This is so much better than groupme.', 3);";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "First Comment inserted succesfully<br>";
} else {
    echo "Error inserting comment: " . $_SESSION['db']->error();
} 
/****************** Add comment in EE221 *******************/
 $sql = "INSERT into Comments(User_Id, Chatroom_Id, Comment, Number_Of_Likes)
	VALUES (1, 3, 'Ohm\'s law is easy!', 1);";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "Ohms law inserted succesfully<br>";
} else {
    echo "Error inserting comment: " . $_SESSION['db']->error();
} 

/****************** Clear out subscribes table ***************/
$sql = "TRUNCATE TABLE Subscribes";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "Subscribes deleted successfully<br>";
} else {
    echo "Error deleting Subscribes: " . $_SESSION['db']->error();
}

/****************** Subscribe Clay to chatroom 1 (498) *******************/
 $sql = "INSERT into Subscribes(UID, Chatroom_Id)
	VALUES (1, 1);";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "Clay Subscribed to CS498 succesfully<br>";
} else {
    echo "Error subscribing Clay: " . $_SESSION['db']->error();
} 

/****************** Subscribe Clay to chatroom 2 (405) *******************/
 $sql = "INSERT into Subscribes(UID, Chatroom_Id)
	VALUES (1, 2);";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "Clay Subscribed to CS405 succesfully<br>";
} else {
    echo "Error subscribing Clay: " . $_SESSION['db']->error();
} 

/****************** Subscribe Test to chatroom 2 (405) *******************/
 $sql = "INSERT into Subscribes(UID, Chatroom_Id)
	VALUES (2, 2);";
if ($_SESSION['db']->query($sql) === TRUE) {
    echo "Test Subscribed to CS405 succesfully<br>";
} else {
    echo "Error subscribing Test: " . $_SESSION['db']->error();
} 


$_SESSION['db']->close();

?>
