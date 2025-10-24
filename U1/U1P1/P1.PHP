<?php

$num1 = 2;
$num2 = 3;


if ($num1 < $num2){
    $valor = $num2 - $num1;
    echo "Dado que el numero 2 es mayor que el numero 1 hay que restarlos y sale $valor";
}else if($num1 > $num2){
    $valor = $num1 + $num2;
    echo "Dado que el numero 2 es menor que el numero 1  hay que sumarlos y sale$valor";
}else{
    $valor = $num1*$num2;
    echo "Dado que son iguales sale hay que multiplicarlos y sale $valor";

}

?>