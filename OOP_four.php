<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        interface EngineInterface
        {
           public function on();
           public function off();
        }
        class Car
        {
            private $color;
            private $year;
            private $manufacturer;
            private $engine;
            function __construct($color, $year, $devloper, EngineInterface $newEngine)
            {
                $this->color = $color;
                $this->year = $year;
                $this->manufacturer = $developer;
                $this->engine = $newEngine;
            }
            public function startEngine()
            {
                $this->engine->on();
            }
            public function stopEngine()
            {
                $this->engine->off();
            }
        }
        class Engine implements EngineInterface
        {
            public function on()
            {

            }
            public function off()
            {

            }
        }
        class anotherEngine implements EngineInterface
        {
            public function on()
            {

            }
            public function off()
            {

            }
        }
        $engine = new Engine();
        $myCar = new Car('black', 2015, 'Mercedes', $engine);
        var_dump($myCar);
    ?>
</body>
</html>