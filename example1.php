<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>   
<?php
// lesson function and object
    class Human{
        public $first_name;
        public $last_name;
        public $age;
        public $position;

        public static $population = 2 . "<br />";
        const HEAD_COUNT = 1;
        public function hello() {
            echo "Hello";
        }
        public function sayName() {
            echo "Hello - $this->first_name <br />";
        }

        public function __construct($first_name, $last_name, $age, $position){
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->age = $age;
            $this->position = $position;
            echo "Birth $this->first_name .<br />";
        }

        public function __destruct() {
            echo "I was invited $this->first_name. I have lived a long life. <br />";
        }

        public static function printPop() {
            echo "Number of people " . self::$population;
        }
    }
    $mark = new Human('Javi', 'Martinez', 30, 'Centre-back');
    $luke = new Human('Joshua', 'Kimmich', 24, 'Right-back');

    $mark->first_name = 'Javi';
    $mark->last_name = 'Martinez';
    $mark->age = 30;
    $mark->position = "Centre-back";

    $luke->first_name = 'Joshua';
    $luke->last_name = 'Kimmich';
    $luke->age = 24;
    $luke->position = " Right-back";

    echo Human::HEAD_COUNT . "<br />";
    echo Human::printPop();
    // unset($luke);
    // $mark->sayName();
    // $mark->hello();
    // echo '<pre>';
    // print_r($mark);
    // print_r($luke);

 
  ?> 

</body>
</html>