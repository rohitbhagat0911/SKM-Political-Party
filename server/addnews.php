<?php
// for event
ob_start();
if (isset($_POST['addnews'])) {
    require_once 'db.php';

    $status = $statusMsg = '';

    $title = $_REQUEST['title'];
    $desc = $_REQUEST['description'];

    // $image2_temp = '';
    // $image3_temo = '';
    // $video = '';

    $maxsize = 20000000;
    $vidbadres = '';
    
    $status = ''; 
    if(!empty($_FILES["image"]["name"])) { 
        
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 

        $image2File = basename($_FILES["image2"]["name"]); 
        $image2Type = pathinfo($image2File, PATHINFO_EXTENSION);

        $image3File = basename($_FILES["image3"]["name"]); 
        $image3Type = pathinfo($image3File, PATHINFO_EXTENSION);

        if ($_FILES['video']['size'] <= $maxsize) {
            $videoFile = basename($_FILES["video"]["name"]); 
            $videoType = pathinfo($videoFile, PATHINFO_EXTENSION);
        } else if(!empty($_FILES["video"]["name"])) {
            $vidbadres="1";
            $status = 'error'; 

        }

        
        // echo "first ".$fileType;
        // echo "second ". $image2Type;
        // echo "third ". $image3Type;
       
        $allowTypes = array('jpg','png','jpeg'); 
        $videoext = array("mp4","avi","3gp","mov","mpeg"); 

        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 

            if (in_array($image2Type, $allowTypes)) {
                $image2 = $_FILES['image2']['tmp_name']; 
            $img2Content = addslashes(file_get_contents($image2)); 

            } else {
                $img2Content = '';
                
            }

            if (in_array($image3Type, $allowTypes)) {
            $image3 = $_FILES['image3']['tmp_name']; 
            $img3Content = addslashes(file_get_contents($image3)); 
         
            } else {
                $img3Content = '';
            }
            
            if (in_array($videoType, $videoext) && $status != 'error' ) {
                $video = $_FILES['video']['tmp_name']; 
            $vidContent = addslashes(file_get_contents($video));
            } else {
                $vidContent = '';
                $vidbadres="1";

            }

        $sql = "INSERT INTO eventform (`title`, `description`, `video` ,`image`, `image2`, `image3`) VALUES ('$title', '$desc', '$vidContent','$imgContent', '$img2Content', '$img3Content')";

            // if ($db->query($sql) && isset($_POST['adsubmit'])) {
            //     echo "<h1>Successfuly</h1>";
            // } else {
            //     echo "<h1>failed</h1>";
            // }

            $insert = $db->query($sql); 
             
            if($insert){ 
                $status = true; 
                $statusMsg = "1"; 
                
            }
            else{ 
                $statusMsg = "0"; 

            }  
        }
        else{ 
            $statusMsg = "0"; 

        } 
    }
    else{ 
        
        $statusMsg = "0";

        
    } 
    if ($vidbadres != '1') {
        header("Location: ../politicalwp.themeslr.com/event-form/index.php?res=newsadded");
ob_end_flush();
    } else {
        header("Location: ../politicalwp.themeslr.com/event-form/index.php?res=newsadded&vb=1");
ob_end_flush();
    }

    
} else {
    header('Location: ../politicalwp.themeslr.com/');
}



?>