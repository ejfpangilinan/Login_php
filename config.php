<?php
    // to establish connection to database
    
    define('DB_SERVER', 'remotemysql.com');
    define('DB_USERNAME', 'O1DmAGoPkZ');
    define('DB_PASSWORD', 'by4y6xaQwl');
    define('DB_NAME', 'O1DmAGoPkZ');
     

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>