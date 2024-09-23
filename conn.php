<?php

    $host = 'localhost'; // Your database host
    $dbname = 'menka'; // Your database name
    $username = 'root'; // Your database username
    $password = ''; // Your database password

    // Create a new mysqli instance for database connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "successfully build connection";
    }







?>