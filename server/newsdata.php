<?php
// for news
 require_once 'db.php';

$sql = "SELECT * FROM news ORDER BY id DESC";
$newsDetails = $db->query($sql);

?>