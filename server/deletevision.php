<?php

if (isset($_GET['id']) ) {
    require_once 'db.php';

$id = $_REQUEST['id'];

$status = '';
$sql = "DELETE FROM vision WHERE `id` = '$id'";

if ($db->query($sql)) {
    $status = "1";
} else {
    $status = "0";
}


header("Location: ../politicalwp.themeslr.com/what-we-fight-for?delete=$status");
} else {
header("Location: ../politicalwp.themeslr.com/");
    
}



?>