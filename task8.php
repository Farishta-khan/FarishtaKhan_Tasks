<?php 
$levelNumber = 9;

$result= match($levelNumber) {
    1=> "Begineer",
    2=> "Intermediate",
    3=> "Advanced",
    default => "Unkown Level"
};
echo"User Level: $result<br>";


?>