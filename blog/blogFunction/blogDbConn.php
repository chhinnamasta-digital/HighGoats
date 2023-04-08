<?php
     $host_name="localhost";
	 $user_name="root";
	 $password="";
	 $db_name="crypto-cronic"; 
	 $links="";

    $links=mysqli_connect($host_name, $user_name,$password,$db_name);
    if(!$links)
    {
        echo "Connection Error".mysqli_connect_error();
        exit();
    }
?>