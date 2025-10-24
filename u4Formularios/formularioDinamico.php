<html>

    <form action="formularioDinamico.php" method ="post">
        <?php
        //isset comprueba si las variables exiten y son nulas
            if(isset($_POST['num'])){
                $numeros = $_POST['num'];
                foreach($numeros as $index => $valor){
                    echo "numero " .($index+1) .": " .$valor ."<br>";

                }
            } else{
                for($i = 0; $i <=10 ; $i  ++){
                    echo '<label for="num' .$i .'">Numero ' .$i .':</label>';
                    echo '<input type="number" id="num' .$i .'"name = num[]" placeholder= "ingresa el numero: " required><br>';
                }  
            }

        ?>

        <input type="submit" value="Enviar">
    </form>
            

</html>
