<?php

/**
 * These are the database login details
 */  
define("HOST", "localhost");     // The host you want to connect to.
define("USER", "root");    // The database username. 
define("PASSWORD", "CS498Project");    // The database password. 
// define("DATABASE", "ShopDB");    // The database name.
define("DATABASE", "StudyBuddy");    // The database name.

define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "members");
 
define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!

/**
*
*/

define("WRONG_PARAMS", "Wrong parameters set.");

define("REGISTER_SUCCESS", "success");
define("REGISTER_FAILED", "Unable to create user record.");
define("REGISTER_REPEAT", "A user with that email address is already registered.");

define("LOGIN_SUCCESS", "success");
define("LOGIN_ERROR", "An error occured when querying the user database.");
define("LOGIN_FAILED", "Bad username or password.");

define("LOGOUT_SUCCESS", "logout");

define("STATUS", "status");

define("ERR_NOT_LOGGED_IN", "Could not complete request; not logged in.");
define("ERR_NOT_ADMIN", "Could not preform action; insufficient privelidges.");

define("UPDATE_SUCCESS", "success");
define("UPDATE_SUCCESS_MESSAGE", "Updated product info!");
define("UPDATE_ADD_SUCCESS_MESSAGE", "Inserted new product!");
define("UPDATE_FAIL", "error");
define("UPDATE_FAIL_MESSAGE", "Could not update product!");
define("UPDATE_ADD_FAIL_MESSAGE", "Could not insert product!");

$BLANK_USER = Array(
	"cid" => "",
	"email" => "",
	"type" => ""
);


?>

