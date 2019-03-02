<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
       class User
       {
           private $name;
           protected $age;
           public function __construct($name, $age)
           {
               $this->name = $name;
               $this->age = $age;
           }
           public function getName()
           {
               return $this->name;
           }
           public function getAge()
           {
               return $this->age;
           }
       }
       class Student extends User
       {
            private $course;
            public function __construct($name, $age, $course)
		    {
                parent::__construct($name, $age);
                $this->course = $course;
		    }
            public function getCourse()
            {
               return $this->course;
            }
       }
       $student = new Student('James', 28, 2);
       echo $student->getName() . " - ";
       echo $student->getAge() . "<br />";
       echo "Course - " . $student->getCourse();
    ?>
</body>
</html>