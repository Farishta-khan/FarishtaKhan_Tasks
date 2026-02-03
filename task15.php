<?php


class person{
    public function greet(){
        echo "Hello i am from <strong>person<strong> class.<br>";
    }

}
class student extends person{
    public function greet(){
        echo "Hello i am from <strong>Student <strong> class<br>";

    }
}
$student1 = new student();
$student1->greet();
?>