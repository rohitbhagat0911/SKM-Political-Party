<?php
 require_once 'db.php';

$sql = "SELECT * FROM goalsset";
$gsDetails = $db->query($sql);
$gsDetail = $db->query($sql);


?>