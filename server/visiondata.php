<?php
 require_once 'db.php';

$sql = "SELECT * FROM vision";
$visionDetails = $db->query($sql);
$visionDetail = $db->query($sql);


?>