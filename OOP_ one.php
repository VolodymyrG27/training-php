<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        class Car
        {
            private $color;
            private $year;
            private $manufacturer;

            public function __construct($color, $year, $manufacturer)
            {
                $this->changeColor($color);
                $this->year = $year;
                $this->manufacturer = $manufacturer; 
            }

            public function startEngine()
            {

            }
            public function changeColor($color)
            {
                if (is_string($color))
                {
                    $this->color = $color;
                }
                die('Color must be a string.');
            }
            public function displayColor()
            {
                return $this->color;
            }
        }
    
        $myCar = new Car('red', 2014, 'Mercedes');
        echo $myCar->displayColor();
    ?>
</body>
</html>