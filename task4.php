<?php

$given_string = "PHP is awesome";

echo "Stirng Length: ".strlen( $given_string ) ."<br>";// print length of string
echo "UpperCase: " .strtoupper( $given_string ) ."<br>";// convert string into uppercase
echo "Replaced: "  .str_replace("awesome","Powerful", $given_string ) ."<br>";
//  find the word to replace and replace it with the wod we want .
?>