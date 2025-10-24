<?php


$horas = 60;
$precio= 12;
$salarioFinal = 0;

if($horas > 40 && $horas <= 48){
    $numhExtras = $horas - 40;
    $salarioFinal = 40*$precio + $numhExtras*$precio*2;

    
}else if($horas > 48){
    $numhExtras = $horas -40;
    $numhExtrasdobles = $numhExtras - 8;
    $salarioFinal = (40*$precio) + (8*($precio*2)) + ($numhExtrasdobles*($precio*3));

}

echo $salarioFinal;

?>