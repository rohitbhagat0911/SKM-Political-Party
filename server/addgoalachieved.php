<?php
if (isset($_POST['addgoal'])) {
    require_once 'db.php';

    $desc = $_REQUEST['desc'];

    $sql = "INSERT INTO goalsachieved (`goals`) VALUES ('$desc')";

    $insert = $db->query($sql); 
     
    if($insert){ 
        $status = true; 
        $statusMsg = "1"; 
        
    }
    else{ 
        $statusMsg = "0"; 

    } 
header("Location: ../politicalwp.themeslr.com/goals-achieved/index.php?res=$statusMsg");

} else {
    header('Location: ../politicalwp.themeslr.com/');
    
}
?>