<?php
 require_once 'db.php';

$sql = "SELECT * FROM partymember";
$pmDetails = $db->query($sql);
$pmDetail = $db->query($sql);


?>