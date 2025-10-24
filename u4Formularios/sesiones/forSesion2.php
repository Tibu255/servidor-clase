
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion 2</title>
</head>
<body>
    <?php

//inicio la sesion
session_start();

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $_SESSION["nombre"] = $_POST["nombre"];

}




?>
<form action="forSesion3.php" method="post">

        <label for="j1">Jugador1:</label>
        <input type="text" name="j1"><br>
        <label for="j2">Jugador2:</label>
        <input type="text" name="j2"><br>
        <label for="j3">Jugador3:</label>
        <input type="text" name="j3"><br>

        <input type="submit" value="Ver">
</form>
</body>
</html>

