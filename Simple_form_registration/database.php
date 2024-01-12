<?php
    $dbServer = 'localhost';
    $dbUser = 'root'; // Your username goes here
    $dbPass = 'root'; // Your password goes here
    $dbName = 'users_data'; // This database can be imported in phpMyAdmin via the usrers_data.sql file
    $conn = '';

    try{
        $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);
    }
    catch(mysqli_sql_exception $exception){
        // echo "Could'nt connect to the db !<br> $exception";
    }
    if($conn){
        // echo "You're connected !<br>";
    }
?>