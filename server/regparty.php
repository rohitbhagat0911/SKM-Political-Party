<?php

ob_start();

if (isset($_POST['regSubmit'])) {
    

require_once 'db.php';

$status = $statusMsg = '';
$appphotoContent = '';
$partymembershipcardContent = '';
$votercardContent = '';
$aadhaarcardContent = '';


$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$district = $_REQUEST['district']. ' DISTRICT';
$constituency  = $_REQUEST['constituency'];
$postinparty = $_REQUEST['postinparty'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$partymembershipnumber = $_REQUEST['partymembershipnumber'];
$voterIdnumber = $_REQUEST['voterIdnumber'];
$aadhaarnumber = $_REQUEST['aadhaarnumber'];
// $applicantphoto
// $partymembershipcard
// $votercard
// $aadhaarcard
$status = 'error';
    if(!empty($_FILES["applicantphoto"]["name"]) && !empty($_FILES["partymembershipcard"]["name"]) && !empty($_FILES["votercard"]["name"]) && !empty($_FILES["aadhaarcard"]["name"])) { 
        
        $fileName = basename($_FILES["applicantphoto"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
       
        $fileNameForPMC = basename($_FILES["partymembershipcard"]["name"]); 
        $fileTypeForPMC = pathinfo($fileNameForPMC, PATHINFO_EXTENSION); 

        $fileNameForVC = basename($_FILES["votercard"]["name"]); 
        $fileTypeForVC = pathinfo($fileNameForVC, PATHINFO_EXTENSION); 

        $fileNameForAC = basename($_FILES["aadhaarcard"]["name"]); 
        $fileTypeForAC = pathinfo($fileNameForVC, PATHINFO_EXTENSION); 

        $allowTypes = array('jpg','png','jpeg'); 
        if(in_array($fileType, $allowTypes) && in_array($fileTypeForPMC, $allowTypes) && in_array($fileTypeForVC, $allowTypes) && in_array($fileTypeForAC, $allowTypes)){ 
            $applicantphoto = $_FILES['applicantphoto']['tmp_name']; 
            $appphotoContent = addslashes(file_get_contents($applicantphoto)); 

            $partymembershipcard = $_FILES['partymembershipcard']['tmp_name']; 
            $partymembershipcardContent = addslashes(file_get_contents($partymembershipcard)); 

            $votercard = $_FILES['votercard']['tmp_name']; 
            $votercardContent = addslashes(file_get_contents($votercard)); 

            $aadhaarcard = $_FILES['aadhaarcard']['tmp_name']; 
            $aadhaarcardContent = addslashes(file_get_contents($aadhaarcard)); 

            
        // $sql = "INSERT INTO eventform (`title`, `description` ,`image`) VALUES ('$title', '$desc', '$imgContent')";

    

        //     $insert = $db->query($sql); 
             
        //     if($insert){ 
        //         $status = true; 
        //         $statusMsg = "1"; 
                
        //     }
            
        }
        else{ 
            $statusMsg = "0"; 

        } 
    }
    else{ 
        
        $statusMsg = "0";

        
    }
    
    $sql = "INSERT INTO partymember ( `name`, `age`, `gender` ,`district`, `constituency`, `postinparty`, `address`, `phone`, `email`, `partycardno`, `vidno`, `adhaarno`, `photo`, `partycard`, `votercard`, `adhaarcard` ) VALUES ('$name', '$age', '$gender', '$district', '$constituency', '$postinparty', '$address', '$phone', '$email', '$partymembershipnumber', '$voterIdnumber', '$aadhaarnumber', '$appphotoContent', '$partymembershipcardContent', '$votercardContent', '$aadhaarcardContent')";

    if ($db->query($sql)) {
         $status="registered";
    } else {
        $status = "failed";
    }

    header("Location: ../politicalwp.themeslr.com/voter-registeration/index.php?res=$status");
ob_end_flush();
} else {
    header('Location: ../politicalwp.themeslr.com/');
    
}
    
?>