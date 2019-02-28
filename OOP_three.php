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
            public $name;
            public $age;
            // Method for checking age
            public function isAgeCorrect($age)
            {
                return $age >= 18 and $age <= 60;
            }
            // Method for changing the age of the user
            public function setAge($age)
            {
                // Check age for correctness
                if ($this->isAgeCorrect($age)) {
                    $this->age = $age;
                }
            }
            // Method to add to age:
            public function addAge($years)
            {
                $newAge = $this->age + $years; // calculate the new age
                // Check age for correctness
                if ($this->isAgeCorrect($newAge)) {
                    $this->age = $newAge; // update if the new age passed the test
                }
            }
        }
        $user = new User;
        $user->setAge(30);
        echo $user->age . "<br />";
        $user->setAge(10);
        echo $user->age;
    ?>
</body>
</html>