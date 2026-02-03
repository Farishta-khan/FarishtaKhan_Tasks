<?php
class Student {
    public $name;
    public $age;
}

$student1 = new Student();
$student1->name = "Farishta Khan";
$student1->age = 23;

echo "Name: " . $student1->name . "<br>";
echo "Age: " . $student1->age . "<br>";
?>