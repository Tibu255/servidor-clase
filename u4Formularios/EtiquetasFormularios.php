<?php
if (isset($_POST["nombre"])){

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$profesion = $_POST["profesion"];
$genero = $_POST["genero"];
 // Checkboxes pueden tener varios valores
    $navegadores = isset($_POST["navegador"]) ? $_POST["navegador"] : [];
    $lista_navegadores = !empty($navegadores) ? implode(", ", $navegadores) : "Ninguno seleccionado";


    // Mostramos los datos
    echo "<h2>DATOS RECIBIDOS</h2>";
    echo "Nombre: $nombre $apellido<br>";
    echo "Edad: $edad años<br>";
    echo "Profesión: $profesion<br>";
    echo "Género: $genero<br>";
    echo "Navegadores: $lista_navegadores<br><br>";


}else {
echo <<<END

    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="apellido">Apellidos:</label>
        <input type="text" id="apellido" name="apellido" required><br>
        <label for="Edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="0" max="110" required><br>
        <label for="profesion">Selecciona tu profesión:</label><br>
            <select name="profesion" required>
                <option value="">--Selecciona tu profesión--</option>
                <option value="Profesor">Profesor</option>
                <option value="Ingeniero">Ingeniero</option>
                <option value="Médico">Médico</option>
                <option value="Abogado">Abogado</option>
                <option value="Diseñador">Diseñador</option>
                <option value="Programador">Programador</option>
            </select><br>
        <label>Selecciona tu genero:</label><br>
            <input type="radio" name="genero" value="Masculino" required> Masculino<br>
            <input type="radio" name="genero" value="Femenino"> Femenino<br>
        <label>Selecciona tus navegadores:</label><br>
            <input type="checkbox" name="navegador[]" value="safari"> safari<br>
            <input type="checkbox" name="navegador[]" value="google"> google<br>
            <input type="checkbox" name="navegador[]" value="microsoftedge"> microsoft edge<br>
            <input type="checkbox" name="navegador[]" value="Otro"> Otro<br>
        <input type="submit" value="Enviar">
    </form>
END;
}
?>