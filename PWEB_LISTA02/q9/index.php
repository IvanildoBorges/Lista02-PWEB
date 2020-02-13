<?php

$num = $_GET["num"];
$mult = 0;

for($i=0 ; $i<$num; $i++){
    $mult =$i*$num;
    echo "$i x $num = $mult <br>";
}