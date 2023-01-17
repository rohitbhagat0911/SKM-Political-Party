<?php

if (isset($_GET['did']) ) {
    require_once 'db.php';

$id = $_REQUEST['did'];

$status = '';
$sql = "DELETE FROM goalsset WHERE `id` = '$id'";

if ($db->query($sql)) {
    $status = "1";
} else {
    $status = "0";
}


header("Location: ../politicalwp.themeslr.com/goals-set?delete=$status");
} else {
header("Location: ../politicalwp.themeslr.com/");
    
}



?>