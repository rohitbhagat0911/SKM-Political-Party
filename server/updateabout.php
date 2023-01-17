<?php

if (isset($_POST['about'])) {
    require_once 'db.php';

    $status = $statusMsg = '';

    $title = $_REQUEST['heading'];
    $desc = $_REQUEST['desc'];
    

    

    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
       
       
        $allowTypes = array('jpg','png','jpeg'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            $sql = "UPDATE aboutparty SET `heading`= '$title', `description`='$desc', `image`= '$imgContent'  WHERE `id` = '1'";
            $insert = $db->query($sql); 
                     
                    if($insert){ 
                        $status = true; 
                        $statusMsg = "1";
                    
                    } else {
                        $statusMsg = "0"; 

                                }  
        }
        else{ 
            $statusMsg = "0"; 

        } 
    }
    else{ 

        $sql = "UPDATE aboutparty SET `heading`= '$title', `description`='$desc' WHERE `id` = '1'";
        $insert = $db->query($sql); 
                 
                if($insert){ 
                    $status = true; 
                    $statusMsg = "1";
                    
                } else {
                    $statusMsg = "0";
                            }

        
    } 
header("Location: ../politicalwp.themeslr.com/about-us/index.php?res=$statusMsg");

    
} else {

    
    header('Location: ../politicalwp.themeslr.com/');


}


?>


