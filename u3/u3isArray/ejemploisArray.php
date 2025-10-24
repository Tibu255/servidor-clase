<?php

// Ejemplo 1
$arrayNum = array(1, 3, 4, 6, 18, 21, 2, 8);
$arrayStr = array("hola", "adios", "pepe", "juan", "perro", "gato");
echo sort($arrayNum);
for($i = 0; $i < count($arrayNum); $i++){
    echo $arrayNum[$i] ." ";
}
echo "<br>";
echo sort($arrayStr);
for($i = 0; $i < count($arrayStr); $i++){
    echo $arrayStr[$i] ." ";
}
echo "<br>";


echo "<br>"; 
echo "<br>";
echo "<br>";

//Ejemplo 2

$frase = "Noma es el perro de mario";

$arraypalabras = explode(" ", $frase); // el espacio es lo que marca una palabra 
// entonces explode es marca espacio y luego lem pasas la frase que dividir por palabras

print_r($arraypalabras);

echo "<br>";

echo " Divido por letras";
echo "<br>";
$arrayLetras = str_split($frase); // para dividir por letras la frase

foreach ($arrayLetras as $letra) {
    echo $letra . "<br>";
}

//array count values nos cuenta los valores de cada cosa que hay en el array
?>