<?php
// for news
if (isset($_GET['id']) ) {
    require_once 'db.php';

$id = $_REQUEST['id'];

$status = '';
$sql = "DELETE FROM news WHERE `id` = '$id'";

if ($db->query($sql)) {
    $status = "deleted";
} else {
    $status = "fdeleted";
}


header("Location: ../politicalwp.themeslr.com/news?status=$status");
} else {
header("Location: ../politicalwp.themeslr.com/");
    
}



?>