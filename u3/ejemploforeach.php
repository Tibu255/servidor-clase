<?php

/*
EJEMPLO1
*/
 $paper = array("Copier", "Inkjet", "Laser", "Photo");

 foreach($paper as $indice => $valor)
 {
 echo "$indice: $valor<br>";
 
 }

 /*
 EJEMPLO2
 */

 $personas = array(
    
    $persona1 = array('Nombre' => "Sergio", 'Apellido1' => "Moreno", 'Apellido2' => "Pablos"),

    $persona2 = array('Nombre' => "Moha", 'Apellido1' => "souto", 'Apellido2' => "amago"));

 foreach($personas as $indice){
    foreach($indice as $nombres => $dato){
        echo"$nombres : $dato<br>";
    }
 }

 /*
 EJEMPO3
 */

 
?> 