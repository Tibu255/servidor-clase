<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon</title>
</head>
<body>
    <h1>Simon</h1>
    <?php
        function pintarCirculos($col1, $col2, $col3, $col4){
            // Array con los colores recibidos
            $colores = [$col1, $col2, $col3, $col4];

            echo '<div style="text-align:center; margin-top:30px;">';
            foreach ($colores as $color) {
                echo '<div style="
                width:80px;
                height:80px;
                border-radius:50%;
                background-color:' . htmlspecialchars($color) . ';
                display:inline-block;
                margin:10px;
                "></div>';
            }
            echo '</div>';
        }

        $colores_posibles = ["red", "blue", "yellow", "green"];

        // Elegir 4 colores aleatorios (pueden repetirse)
        $col1 = $colores_posibles[array_rand($colores_posibles)];
        $col2 = $colores_posibles[array_rand($colores_posibles)];
        $col3 = $colores_posibles[array_rand($colores_posibles)];
        $col4 = $colores_posibles[array_rand($colores_posibles)];

        pintarCirculos($col1, $col2, $col3, $col4);

    ?>
    <form action="jugar.php" method="post">
        <input type="submit" value="A jugar"> 
    </form>
</body>
</html>