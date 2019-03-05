<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "CodeMu";
   $connection = new mysqli($host, $username, $password, $dbname);
    if ($connection->connect_error)
    {
        die("Connection filed: " .$connection->connect_error);
    } 
    else 
    {
        echo "Connection successfull " . "<br />";
    }
   $sql = "CREATE TABLE users(
        name VARCHAR (30) NOT NULL,
        surname VARCHAR (30) NOT NULL PRIMARY KEY,
        password VARCHAR (30) NOT NULL)";
    if ($connection->query($sql) === TRUE) {
        echo "Table users created successfully" . "<br />";
    }
    else 
    {
        echo "Error " . "<br />" . $connection->error;
    }
   /*procedural approach to connecting the database*/
   $connection = mysqli_connect($host, $username, $password, $dbname);
   if (!$connection) {
       die("Connection filed: " . mysqli_connect_error());
   }
   $sql = "CREATE TABLE users2(
        name VARCHAR (30) NOT NULL,
        surname VARCHAR (30) NOT NULL PRIMARY KEY,
        password VARCHAR (30) NOT NULL)";
    if (mysqli_query($connection, $sql)) {
        echo "Table users2 created ";
    }
    else 
    {
        echo "Error " . mysqli_error($connection);
    }
$connection->close();
?>