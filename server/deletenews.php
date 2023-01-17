<?php
// for event
if (isset($_GET['id']) ) {
    require_once 'db.php';

$id = $_REQUEST['id'];

$status = '';
$sql = "DELETE FROM eventform WHERE `id` = '$id'";

if ($db->query($sql)) {
    $status = "deleted";
} else {
    $status = "fdeleted";
}


header("Location: ../politicalwp.themeslr.com/events?status=$status");
} else {
header("Location: ../politicalwp.themeslr.com/");
    
}



?>