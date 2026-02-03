<?php
  echo"Multi dimensional arrays<br>";
  $students=[
  ["name" => "Ayesha", "marks" => 65],
  ["name" => "Sidra", "marks" => 45],
  ["name" => "Aleena", "marks" => 78],
  ["name" => "Sana", "marks" => 92],
  ["name" => "Farishta", "marks" => 61]];
  foreach ($students as $student) {
    if ($student['marks'] >= 60) {
        echo $student["name"] . "    scored above 60<br>";

  }}
?>