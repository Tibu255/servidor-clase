<?php

     $a = 1.00;
     $b = -3.00;
     $c = 2.00;
     
     $operacion1 = (-$b + sqrt(($b**2) - 4*$a*$c ))/ 2*$a;
     $operacion2 =  (-$b - sqrt(($b**2) - 4*$a*$c ))/ 2*$a; 

    $compro1 = ($b**2) - (4*$a*$c);
    $compro2= -$b / (2*$a);

    if($compro1 < 0){
        echo("es negativo por lo cual no hay soluciones");
    }elseif($compro2 == 0){
        echo("Hay una unica solución ");
    }elseif($operacion1 > 0 && $operacion2 > 0){
        echo("Hay dos soluciones y son las siguientes: La operacion1 da $operacion1 y la operacion2 da $operacion2");

    }
?>