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
        <?php 
           $person {
              'age' => 31,
              'hair' => 'brown',
              'carrer' => 'web development'
           }

           foreach ($person as $feature) :
               echo " <li>$feature</li>";
           endforeach;
        ?>

</body>
</html>