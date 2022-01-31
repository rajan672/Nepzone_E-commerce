<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "nepzone";

//create connection

$conn = new mysqli($db_host,$db_user,$db_password,$db_name);

//check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  /* echo "Connected successfully"; */

?>