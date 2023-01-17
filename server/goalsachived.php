<?php
 require_once 'db.php';

$sql = "SELECT * FROM goalsachieved";
$gaDetails = $db->query($sql);
$gaDetail = $db->query($sql);


?>