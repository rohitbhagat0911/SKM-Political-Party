<?php
if (isset($_POST['addglset'])) {
    require_once 'db.php';

    $desc = $_REQUEST['desc'];

    $sql = "INSERT INTO goalsset (`goals`) VALUES ('$desc')";

    $insert = $db->query($sql); 
     
    if($insert){ 
        $status = true; 
        $statusMsg = "1"; 
        
    }
    else{ 
        $statusMsg = "0"; 

    } 
header("Location: ../politicalwp.themeslr.com//goals-set?res=$statusMsg");

} else {
    header('Location: ../politicalwp.themeslr.com/');
    
}
?>