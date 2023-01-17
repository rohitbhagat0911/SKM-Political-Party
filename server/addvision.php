<?php
if (isset($_POST['addvision'])) {
    require_once 'db.php';

    $desc = $_REQUEST['desc'];

    $sql = "INSERT INTO vision (`goals`) VALUES ('$desc')";

    $insert = $db->query($sql); 
     
    if($insert){ 
        $status = true; 
        $statusMsg = "1"; 
        
    }
    else{ 
        $statusMsg = "0"; 

    } 
header("Location: ../politicalwp.themeslr.com/what-we-fight-for?res=$statusMsg");

} else {
    header('Location: ../politicalwp.themeslr.com/');
    
}
?>