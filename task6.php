<?php
$marks=69;
if ($marks>=80){
    echo"Grade:A <br>";
    echo"Outsatnding Result!";
}elseif ($marks>=70){
    echo "Grade:B <br>";
    echo "Good job!";
}elseif ($marks>= 60){
    echo "Grade:C <br>";
    echo "Fair Effort!";
}else{
    echo "Grade:F <br>";
    echo "Needs Improvement.";
}
?>