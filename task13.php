<?php
class Student {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$student1 = new Student("Farishta Khan", 23);

echo "Name: " . $student1->name . "<br>";
echo "Age: " . $student1->age . "<br>";
?>
