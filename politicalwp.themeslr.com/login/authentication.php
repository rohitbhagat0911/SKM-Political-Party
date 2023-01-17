<?php
    session_start();
    ob_start();
        require 'connection.php' ;

        $username = $_POST['user'];
        $password = $_POST['pass'];  
          
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "select * from login where emailid = '$username' and Password = '$password';";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                // echo "<h1><center> Login successful </center></h1>";  
                
                // if(isset($_POST['mySubmit'])) {
                //     header('Location: index.html');
                // }
               if( $_POST['user'] == $username && $_POST['pass'] == $password)
                    // $_SESSION['username'] = $_REQUEST['user'];
                    $_SESSION['isLoggedIn'] = true;
                    $_SESSION['userDegree'] = $row['user_degree'];
                    $_SESSION['adminStatus'] = $row['user'];
                    header( 'Location: ../index.php' );
               
                   ob_end_flush();
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }     
    ?>  