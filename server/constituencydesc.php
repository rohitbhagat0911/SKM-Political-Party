<?php

if (isset($_POST['editcons'])) {
    require_once 'db.php';

    $desc = $_REQUEST['desc'];
    $id = $_REQUEST['id'];

    $sql = "UPDATE constituency SET `description`='$desc' WHERE `id`='$id'";


            $insert = $db->query($sql); 
             
            if($insert){ 
                $status = true; 
                $statusMsg = "1"; 
                
            }
            else{ 
                $statusMsg = "0"; 

            }  

header("Location: ../politicalwp.themeslr.com/constituency/?con=1&e=$statusMsg");

    
} else {
    header('Location: ../politicalwp.themeslr.com/');
}



?>