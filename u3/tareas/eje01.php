<?php

echo "EJERICIO 1 <br>";
echo "aparatdo a";
echo"<br>";
$coches = array(32, 11, 45, 22, 78, -3, 9, 66, 5);
echo "$coches[5] <br>";

echo "apartado b";
echo "<br>";

$importe = array(32.583, 11.239, 45.781, 22.237);
echo "$importe[1] , $importe[3] <br>";

echo "apartado c";
echo "<br>";

$confirmado = array(true, true, false, true, false, false);
echo "$confirmado[0] <br>";

echo "apartado d";
echo "<br>";

$jugador = array("Crovic", "Antic", "Malic", "Zulic", "Rostrich");
echo "La alineacion del equipo esta compuesta por " . implode(" ", $jugador);
echo "<br>";



?>