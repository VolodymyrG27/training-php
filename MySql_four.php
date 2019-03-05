<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "CodeMu";

   $connection = new mysqli($host, $username, $password, $dbname);
   $sql = "INSERT INTO users (name, surname, password)
        VALUES('Josua', 'Kimmich', '54321')";
    if ($connection->query($sql) === TRUE) {
        echo "Record created";
    }


/*procedural approach to connecting the database
    $connection = mysqli_connect($host, $username, $password, $dbname);
    $sql = "INSERT INTO users (name, surname, password)
        VALUES('Josua', 'Kimmich', '54321')";
    if (mysqli_query($connection, $sql)) {
        echo "Record created";
    }
    mysqli_close($conn); 
    */
$connection->close();
?>