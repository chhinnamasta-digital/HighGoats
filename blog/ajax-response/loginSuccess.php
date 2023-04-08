<?php
     include("../blogFunction/blogDbConn.php");
     $userName = $_POST['blogusername'];
     $userPass = $_POST['bloguserpassword'];
    
     $select_user = "select username, password from cms_admin where username='$userName' AND password='$userPass'";
     $query = mysqli_query($links, $select_user);
     $numRow = mysqli_num_rows($query);
     if($numRow == 1){
        $output = ["message" => "Record  Found", "status" => 1];
        session_start();
        $_SESSION['blogUser'] = $userName; 
        // header("Location: ../index.php");
       
     }
     else{        
        $output = ["message" => "Record Not Found", "status" => 0];
     }
    //  header('Content-Type: application/json');
     echo json_encode($output);
?>