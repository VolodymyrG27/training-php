<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        li {
            margin: 5px;
            text-align: center;
        }
    </style>
</head>
<body> 
    <ul>
        <?php 
            $animals = [
                'CAT',
                'DOG',
                'PIG',
                'CHICKEN',
                'LION'
            ];
            foreach($animals as $animal){
                echo "<li>$animal</li>";
            }
        ?>
    </ul>
</body>
</html>