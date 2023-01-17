<?php

if (isset($_POST['editvision'])) {
    require_once 'db.php';

    $desc = $_REQUEST['desc'];
    $id = $_REQUEST['id'];

    $sql = "UPDATE vision SET `goals`='$desc' WHERE `id`='$id'";


            $insert = $db->query($sql); 
             
            if($insert){ 
                $status = true; 
                $statusMsg = "1"; 
                
            }
            else{ 
                $statusMsg = "0"; 

            }  

header("Location: ../politicalwp.themeslr.com/what-we-fight-for?e=$statusMsg");

    
} else {
    header('Location: ../politicalwp.themeslr.com/');
}



?>