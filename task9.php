<?php
// For loop
echo"Numbers 1-10 using for loop<br>";
for ( $i=1 ;$i<=10;$i++){
   
    echo $i ."<br>";
}

echo"<br>Table#5 using While loop<br><br>";
$number=5;
$i= 1;
while ( $i<= 10){
    echo "$number x $i =" .($number*$i)."<br>";
    $i++;
}
?>