<?php
// for event
 require_once 'db.php';

$sql = "SELECT * FROM eventform ORDER BY id DESC";
$eventDetails = $db->query($sql);

?>