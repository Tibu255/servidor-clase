<?php

$resutado = 0;
if (isset($_POST["numero1"]) && isset($_POST["num2"]) && isset($_POST["oper"])) {
    $num1 = $_POST["numero1"];
    $num2 = $_POST["num2"];
    $oper = $_POST["oper"];

    switch ($oper) {
        case '+':
           $resultado = "La suma de $num1 + $num2 = " . ($num1 + $num2);
            break;
        case '-':
            $resultado = "La resta de $num1 - $num2 = " . ($num1 - $num2);
            break;
        case '*':
            $resultado = "La multiplicación de $num1 × $num2 = " . ($num1 * $num2);
            break;
        case '/':
            if ($num2 == 0) {
                $resultado=  "No se puede dividir entre cero.";
            } else {
                $resultado = "La división de $num1 ÷ $num2 = " . ($num1 / $num2);
            }
            break;
        default:
            $resultado = "Operador no válido. Usa +, -, * o /.";
    }
}
    echo <<<END
<html>
  <body>
    <h2>Formulario</h2>
END;

if ($resultado != "") {
    echo "<h3>$resultado</h3><hr>";
}

echo <<<END
    <form action="" method="post">
      <label for="numero1">Número 1:</label>
      <input type="text" id="numero1" name="numero1" required>

      <label for="num2">Número 2:</label>
      <input type="text" id="num2" name="num2" required>

      <label for="oper">Operador (+, -, *, /):</label>
      <input type="text" id="oper" name="oper" required>

      <button type="submit">Calcular</button>
    </form>
  </body>
</html>
END;

?>
