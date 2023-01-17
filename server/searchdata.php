<?php
if (isset($_POST['searchTapped']) || isset($_POST['searchTap'])) {
    require_once 'db.php';

    $searchData = $_REQUEST['searchData'];
// echo $searchData;

    $sql = "SELECT * FROM partymember WHERE `name` LIKE '%$searchData%' OR `partycardno` LIKE '%$searchData%'";

    $scDetails = $db->query($sql);
    $scDetail = $db->query($sql);

 
    if($scDetails){ 
        $status = true; 
        $statusMsg = "1"; 
        
    }
    else{ 
        $statusMsg = "0"; 

    } 

    // if($scDetails != FALSE && $scDetails->num_rows > 0) {
    //     $sn = 1; 
    //         while ($scs = $scDetails->fetch_assoc()) {
    //             echo "/n".$scs['name'];

    //         }
    //     }
// header("Location: ../politicalwp.themeslr.com/constituency/?con=1");
    }
// } else {
//     header('Location: ../politicalwp.themeslr.com/');
    
// }
?>