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
           public function getName()
           {
               return $this->name;
           }
           public function setName($name)
           {
               $this->name = $name;
           }
           public function getAge()
           {
               return $this->age;
           }
           public function setAge($age)
           {
               $this->age = $age;
           }
       }
       class Student extends User
       {
           private $course;
           public function addOneYear()
           {
               $this->age++;
           }
           public function getCourse()
           {
               return $this->course;
           }
           public function setCourse($course)
           {
               $this->course = $course;
           }
       }
        $student = new Student();
        $student->setName('James');
        $student->setCourse(3); 
        $student->setAge(27);
        $student->addOneYear();
        echo $student->getAge();
    ?>
</body>
</html>