<?php
    $hostname = 'localhost'; // specify host domain or IP, i.e. 'localhost' or '127.0.0.1' or server IP 'xxx.xxxx.xxx.xxx'
    $database = 'neust-clinic'; // specify database name
    $db_user = 'root'; // specify username
    $db_pass = ''; // specify password
    
    $connection = mysqli_connect("$hostname" , "$db_user" , "$db_pass", "$database");
        
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }    
    
    //print("<br />Successfully connected to database:<strong> ".$database."</strong><br />");
    //print("Using host:<strong> ".$hostname."</strong><br />");
    //print("As the user:<strong> ".$db_user."</strong><br />");

?>