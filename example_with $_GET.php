<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header{
            background: silver;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>  
    <header> 
        <h1>
        <?php 
        $name = $_GET['name'];
        echo "Hello, $name";
        ?>
        </h1>
        <br />
        <h1>
        <?php
        echo "hello, " . $_GET['name']; 
        ?>
        </h1>
    </header>
</body>
</html>