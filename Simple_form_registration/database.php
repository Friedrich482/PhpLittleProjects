<?php
    $dbServer = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'users_data';
    $conn = '';

    try{
        $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);
    }
    catch(mysqli_sql_exception){
        // echo "Could'nt connect to the db !<br>";
    }
    if($conn){
        // echo "You're connected !<br>";
    }
?>