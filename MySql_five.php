<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "CodeMu";

   $connection = new mysqli($host, $username, $password, $dbname);
   $sql = "SELECT * FROM users"; // Вибирає всі стовпці з таблиці users
   $result = $connection->query($sql); //виконує запит і ставить їх в змінну $result
   if ($result->num_rows > 0) { //num_rows функція провіряє число рядків
       while ($row = $result->fetch_assoc()) { // fetch_assoc функція кладе всі результати в асіативний масив і перебирає результат і виводить дані
           echo "<br />id: ". $row["user_id"] . "<br /> name: ". $row["name"] . "<br />surname: ". $row["surname"];
       }
   }
   $connection->close();
?>