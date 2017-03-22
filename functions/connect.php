<?php
require 'neatdb.php';
require 'config.php';

session_start();

$_SESSION['db'] = new NeatDB();
?>
