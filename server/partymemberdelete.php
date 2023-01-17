<?php

if (isset($_GET['did']) ) {
    require_once 'db.php';

$id = $_REQUEST['did'];

$status = '';
$sql = "DELETE FROM partymember WHERE `id` = '$id'";

if ($db->query($sql)) {
    $status = "deleted";
} else {
    $status = "fdeleted";
}


header("Location: ../politicalwp.themeslr.com/constituency/index.php?status=$status");
} else {
header("Location: ../politicalwp.themeslr.com/");
    
}



?>