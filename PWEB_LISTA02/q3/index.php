<?php

$soma = 0;

for($count=0 ; $count<100; $count++){

    $aleatorio = rand(0, 100);
    $soma += $aleatorio;

    if($soma > 1000){
        echo "Soma = $soma. Fim da  execução!";
        break;
    }else{
        echo "Soma = $soma <br>";
    }
}