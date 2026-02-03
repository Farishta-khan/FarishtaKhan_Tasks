<?php
echo"Indexed Array<br>";
$colors =["Orange","Green","Red","Crimson","Pink","Blue","Yellow","Voilet"];
foreach ($colors as $color) {
    echo $color."<br>";
}

echo "<br>";
echo "Associated Array<br>";

$student = [
    "name" => "Farishta",
    "age" => 23,
    "course" => "Software Engineering"
];

foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}
?>

