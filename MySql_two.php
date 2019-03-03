<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $connection = new mysqli($serverName, $userName, $password);
    if ($connection->connect_error) 
    {
        die("Conection failed: " . $connection->connect_error);
    }
    $sql = "CREATE DATABASE testDB";
    if ($connection->query($sql) === TRUE) 
    {
        echo "Database created successfully";
    } 
    else 
    {
        echo "Error " . $connection->error;
    }
    /*procedural approach to connecting the database
    $connection = mysqli_connect($serverName, $userName, $password);
    if (!$connection) 
    {
        die("Conection failed: " . mysqli_connect_error());
    }
    $sql = "CREATE DATABASE testDB";
    if (mysqli_query($connection, $sql)) 
    {
        echo "Database created successfully";
    } 
    else 
    {
        echo "Error " . mysqli_error($connection);
    }
    mysqli_close($connection); //close the connection
    end*/
    /*PDO
    try{
        $connection = new PDO("mysql:host=$serverName;dbname=testDB", $userName, $password);
        $sq; = "CREATE DATABASE testDB";
        $connection->exec($sql);
        echo "Database created successfully";
    }
    catch (PDOException $e) 
    {
        echo $sql . $e->getMessage();    
    }
*/
?>