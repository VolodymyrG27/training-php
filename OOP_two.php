<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        class Employee
        {
            public $name;
            public $age;
            public $salary;
            public function getName()
            {
                return $this->name;
            }
            public function getAge()
            {
                return $this->age;
            }
            public function getSalary()
            {
                return $this->salary;
            }
            public function checkAge()
            {
                if ($this->age > 18) {
                    echo true;
                } 
                else {
                    echo false;
                }
            }
        }
        $employee = new Employee();
        $employee->name = 'James';
        $employee->age = 21;
        $employee->salary = 1500;
        echo $employee->checkAge() . "<br />";

        class User
        {
            public $name;
            public $age;
            public function setAge($age)
            {
                $this->name = $name;
                if ($this->age >= 18) {
                    $this->age = $age;
                } else {
                    
                }
            }
        }
        $user = new User($name = 'James', $age = 21);
        $user->setAge($age = 30);
    ?>
</body>
</html>