<?php

    $num1 = rand(1,100);
    $num2 = rand(1, 100);

    if($num1 > $num2){
        if($num1 %2 == 0){
            echo("E l numero 1 es el mayor y su valor es $num1 entonces es par");
        }else{
            echo("El numero1 es el mayor y su valor es $num1 entonces es impar");
        }
    }elseif($num2 > $num1){
        if($num2 %2 == 0){
            echo("E l numero 2 es el mayor y su valor es $num2 entonces es par");
        }else{
            echo("El numero2 es el mayor y su valor es $num2 entonces es impar");
        }
    }
?>