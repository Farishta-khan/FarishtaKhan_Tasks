<?php
class Person {
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function greet() {
        echo"Hello i am from parent class<br>";
    }
}

class Student extends Person {
    // Inherits everything from Person
}

$student1 = new Student("Sara Khan", 23);
echo $student1->greet() ."<br>";

echo "Name: " . $student1->name . "<br>";
echo "Age: " . $student1->age . "<br>";
?>
