<?php 

$db = new mysqli("localhost", "root", "", "javatpoint");

if ($db->connect_error) {
  
  echo "<h1>ERROR 505</h1>";
}

?>