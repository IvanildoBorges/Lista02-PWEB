<?php

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

for($i=0 ; $i<$num1; $i++){
    for($j=0; $j<$num2; $j++){
        echo "_|";
    }
    echo "<br>";
}