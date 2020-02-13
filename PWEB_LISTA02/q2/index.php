<?php

for($count=0 ; $count<50; $count++){

    $aleatorio = rand(0, 50);

    if($aleatorio == 37){
        echo "Número $aleatorio encontrado. Fim da  execução!";
        break;
    }else{
        echo "Número: $aleatorio <br>";
    }
}