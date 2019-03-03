<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $connection = new mysqli($serverName, $userName, $password);
    if ($connection->connect_error)
    {
        die("Connection filed: " .$connection->connect_error);
    } 
    else 
    {
        echo "Connection successfull";
    }
    /*procedural approach to connecting the database
    $connection = mysqli_connect($serverName, $userName, $password);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
        echo "Connection successfull";
    }
    end procedural...*/
    /*PDO
    try {
        $connection = new PDO("mysql:host=$serverName; dbname=newDB", $userName, $password);
        echo "Connection successfull"; 
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    end connection PDO*/
?>