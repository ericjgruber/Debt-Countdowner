<?php

$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create a new connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Make sure the connection is good
if (!$connection) {
  echo "The database connection failed: " . mysqli_connect_error();
  die;
}

?>