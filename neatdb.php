<?php
require_once 'config.php';

class NeatDB {
  // The database connection
  protected static $connection;
  public function connect() {
    if(!isset(self::$connection)) {
      self::$connection = new  mysqli(HOST, USER, PASSWORD, DATABASE) or die("db_connect.php - Connection failed: " . $conn->connect_error);;
    }
    if(self::$connection === false) {
    	
      return false;
    }
//     if ($self::$connection->connect_error) {
//    	 die("db_connect.php - Connection failed: " . $conn->connect_error);
//     }

    
    return self::$connection;
  }
  public function query($query) {
    $connection = $this -> connect();
    $result = $connection -> query($query);
    return $result;
  }
  public function select($query) {
    $rows = array();
    $result = $this -> query($query);
    if($result === false) {
      return false;
    }
    while ($row = $result -> fetch_assoc()) {
      $rows[] = $row;
    }
    return $rows;
  }
  public function error() {
    $connection = $this -> connect();
    return $connection -> error;
  }
  public function quote($value) {
    $connection = $this -> connect();
    return "'" . $connection -> real_escape_string($value) . "'";
  }
  public function close() {
 	$connection = $this -> connect();
  	$connection->close;
  }
}
?>
