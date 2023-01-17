<?php
 require_once 'db.php';

$sql = "SELECT * FROM constituency";
$consDetails = $db->query($sql);
 

?>