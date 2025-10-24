<?php

    $num = rand(1,1000);
    $suma = 0;
    for($i = 1; $i <= num; $i++){
        if($num % $i ==0){
            $suma += $i;
        }
    }

    if($sum == $num ){
        echo("El numero $num es perfecto");
    }else{
       echo("El numero $num no es perfecto"); 
    }

?>