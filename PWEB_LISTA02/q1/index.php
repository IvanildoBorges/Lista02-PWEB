<?php

$num = $_GET["num"];

$soma = 0;

for($count=0 ; $count<=$num; $count++){
    $soma +=$count;
}

echo "Soma dos números até o maximo $num, informado pelo usuario = $soma";