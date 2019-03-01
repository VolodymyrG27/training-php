<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        abstract class Animal
        {
            protected $name;
            public abstract function makeSound();
        }    
            class Cat extends Animal
            {
                public function makeSound()
                {
                    echo 'meow' . "<br />";
                }
            }
            class Dog extends Animal
            {
                public function makeSound()
                {
                    echo 'gav gav';
                }
            }
            class Owner
            {
                public function pleasAnimalSound(Animal $animal)
                {
                    return $animal->makeSound();
                }
            }
        $cat = new Cat();
        $dog = new Dog();
        $owner = new Owner();
        $owner->pleasAnimalSound($cat);
        $owner->pleasAnimalSound($dog);
    ?>
</body>
</html>