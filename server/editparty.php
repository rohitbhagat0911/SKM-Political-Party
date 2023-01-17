<?php

ob_start();

if (isset($_POST['ediSubmit'])) {
    

require_once 'db.php';

$status = $statusMsg = '';
$appphotoContent = '' ;
$partymembershipcardContent = '';
$votercardContent = '';
$aadhaarcardContent = '';
// $appphotoContent = $_REQUEST['aphoto'];
// $partymembershipcardContent = $_REQUEST['pcard'];
// $votercardContent = $_REQUEST['vphoto'];
// $aadhaarcardContent = $_REQUEST['adcard'];

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
$eid = $_REQUEST['eid'];
$deg = $_REQUEST['deg'];
// $applicantphoto
// $partymembershipcard
// $votercard
// $aadhaarcard
$status = 'error';
    if(!empty($_FILES["applicantphoto"]["name"]) || !empty($_FILES["partymembershipcard"]["name"]) || !empty($_FILES["votercard"]["name"]) || !empty($_FILES["aadhaarcard"]["name"])) { 
        
        $fileName = basename($_FILES["applicantphoto"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
       
        $fileNameForPMC = basename($_FILES["partymembershipcard"]["name"]); 
        $fileTypeForPMC = pathinfo($fileNameForPMC, PATHINFO_EXTENSION); 

        $fileNameForVC = basename($_FILES["votercard"]["name"]); 
        $fileTypeForVC = pathinfo($fileNameForVC, PATHINFO_EXTENSION); 

        $fileNameForAC = basename($_FILES["aadhaarcard"]["name"]); 
        $fileTypeForAC = pathinfo($fileNameForAC, PATHINFO_EXTENSION); 

        $allowTypes = array('jpg','png','jpeg'); 
        if(in_array($fileType, $allowTypes) ){ 
            $applicantphoto = $_FILES['applicantphoto']['tmp_name']; 
            $appphotoContent = addslashes(file_get_contents($applicantphoto));
            $sql = "UPDATE partymember SET `photo`=  '$appphotoContent' WHERE `id`='$eid'";
            $db->query($sql);
        }

        if (in_array($fileTypeForPMC, $allowTypes) ) {
            $partymembershipcard = $_FILES['partymembershipcard']['tmp_name']; 
            $partymembershipcardContent = addslashes(file_get_contents($partymembershipcard));
            $sql = "UPDATE partymember SET `partycard`= '$partymembershipcardContent' WHERE `id`='$eid'";
            $db->query($sql);
        }

        if (in_array($fileTypeForVC, $allowTypes)) {
            $votercard = $_FILES['votercard']['tmp_name']; 
            $votercardContent = addslashes(file_get_contents($votercard)); 
            $sql = "UPDATE partymember SET `votercard`= '$votercardContent' WHERE `id`='$eid'";
            $db->query($sql);
        }

        if (in_array($fileTypeForAC, $allowTypes)) {
            $aadhaarcard = $_FILES['aadhaarcard']['tmp_name']; 
            $aadhaarcardContent = addslashes(file_get_contents($aadhaarcard));
            $sql = "UPDATE partymember SET `adhaarcard`= '$aadhaarcardContent' WHERE `id`='$eid'";
            $db->query($sql);
        }


    $sql = "UPDATE partymember SET `name`= '$name', `age`= '$age', `gender`=  '$gender' ,`district`= '$district', `constituency`= '$constituency', `postinparty`= '$postinparty', `address`= '$address', `phone`= '$phone', `email`=  '$email', `deg` ='$deg' ,`partycardno` = '$partymembershipnumber', `vidno`=  '$voterIdnumber', `adhaarno`=  '$aadhaarnumber' WHERE `id`='$eid'";
    $db->query($sql);

             


           

            
        // $sql = "INSERT INTO eventform (`title`, `description` ,`image`) VALUES ('$title', '$desc', '$imgContent')";

    

        //     $insert = $db->query($sql); 
             
        //     if($insert){ 
        //         $status = true; 
        //         $statusMsg = "1"; 
                
        //     }
     
    }
    else{ 
        
        $sql = "UPDATE partymember SET `name`= '$name', `age`= '$age', `gender`=  '$gender' ,`district`= '$district', `constituency`= '$constituency', `postinparty`= '$postinparty', `address`= '$address', `phone`= '$phone', `email`=  '$email', `deg` ='$deg' ,`partycardno` = '$partymembershipnumber', `vidno`=  '$voterIdnumber', `adhaarno`=  '$aadhaarnumber' WHERE `id`='$eid'";
        $db->query($sql);

        
    }


    // $sql = "UPDATE partymember SET `name`= '$name', `age`= '$age', `gender`=  '$gender' ,`district`= '$district', `constituency`= '$constituency', `postinparty`= '$postinparty', `address`= '$address', `phone`= '$phone', `email`=  '$email', `deg` ='$deg' ,`partycardno` = '$partymembershipnumber', `vidno`=  '$voterIdnumber', `adhaarno`=  '$aadhaarnumber', `photo`=  '$appphotoContent', `partycard`= '$partymembershipcardContent', `votercard`= '$votercardContent', `adhaarcard`= '$aadhaarcardContent' WHERE `id`='$eid'";
    

    // if ($db->query($sql)) {
    //      $status="edited";
    // } else {
    //     $status = "failed";
    // }

    header("Location: ../politicalwp.themeslr.com/voter-registeration/index.php?res=edited");
ob_end_flush();
} else {
    header('Location: ../politicalwp.themeslr.com/');
    
}
    
?>