<?php
// for news
ob_start();
if (isset($_POST['enews'])) {
    require_once 'db.php';

    $status = $statusMsg = '';

    $title = $_REQUEST['title'];
    $desc = $_REQUEST['description'];
    $id = $_REQUEST['id'];
    $maxsize = 20000000;
    // $_FILES['video']['size'] <= $maxsize
    $vidbadres = '';
    

    $status = ''; 
    if(!empty($_FILES["image"]["name"]) || !empty($_FILES["image2"]["name"]) || !empty($_FILES["image3"]["name"]) || !empty($_FILES["video"]["name"]))  { 
        
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);  

        $image2Name = basename($_FILES["image2"]["name"]); 
        $image2Type = pathinfo($image2Name, PATHINFO_EXTENSION);  

        $image3Name = basename($_FILES["image3"]["name"]); 
        $image3Type = pathinfo($image3Name, PATHINFO_EXTENSION);

        if ( (!empty($_FILES["video"]["name"])) && ($_FILES['video']['size'] <= $maxsize)) {
            $videoFile = basename($_FILES["video"]["name"]); 
            $videoType = pathinfo($videoFile, PATHINFO_EXTENSION);
        } else if(!empty($_FILES["video"]["name"])){
            $vidbadres="1";
            $status = 'error'; 

        }
       
       
        $allowTypes = array('jpg','png','jpeg'); 
        $videoext = array("mp4","avi","3gp","mov","mpeg"); 

        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));
            
            $sql = "UPDATE news SET `image` = '$imgContent'";
            $db->query($sql);

        }  else {
            
        }

        if (in_array($image2Type, $allowTypes)) {
            $image2 = $_FILES['image2']['tmp_name']; 
            $img2Content = addslashes(file_get_contents($image2)); 

            $sql = "UPDATE news SET `image2` = '$img2Content'";
            $db->query($sql);
            
        } else {
            $img2Content = '';
        }
         
        if (in_array($image3Type, $allowTypes)) {
            $image3 = $_FILES['image3']['tmp_name']; 
            $img3Content = addslashes(file_get_contents($image3)); 

            $sql = "UPDATE news SET `image3` = '$img3Content'";
            $db->query($sql);
            
        } else {
            $img3Content = '';
        }
         
        
        if (in_array($videoType, $videoext) && $status != 'error' ) {
            $video = $_FILES['video']['tmp_name']; 
        $vidContent = addslashes(file_get_contents($video));
        $sql = "UPDATE news SET `video` = '$vidContent'";
        $db->query($sql);

        } else {
            // $vidbadres="1";

        }
        // $sql = "UPDATE eventform SET `title`='$title', `description`='$desc', `image`='$imgContent' WHERE `id`='$id'";

            // if ($db->query($sql) && isset($_POST['adsubmit'])) {
            //     echo "<h1>Successfuly</h1>";
            // } else {
            //     echo "<h1>failed</h1>";
            // }

            // $insert = $db->query($sql); 
             
            // if($insert){ 
            //     $status = true; 
            //     $statusMsg = "1"; 
                
            // }
            // else{ 
            //     $statusMsg = "0"; 

            // }  

        $sql = "UPDATE news SET `title`='$title', `description`='$desc' WHERE `id`='$id'";
        $db->query($sql);
        
    }
    else{ 

        $sql = "UPDATE news SET `title`='$title', `description`='$desc' WHERE `id`='$id'";
        
        if ($db->query($sql)) {
             $statusMsg = "upspl";
        } else {
            $statusMsg = "fupspl";
        }

        
    } 

    if ($vidbadres == '') {
        header("Location: ../politicalwp.themeslr.com/news-form/index.php?res=newsupdated");
ob_end_flush();
    } else if($vidbadres == '1') {
        header("Location: ../politicalwp.themeslr.com/news-form/index.php?res=newsupdated&vb=1");
ob_end_flush();
    }

    
} else {
    header('Location: ../politicalwp.themeslr.com/');
}



?>