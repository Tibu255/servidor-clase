
        <?php
            $tope = isset($_POST['tope']) ? $_POST['tope'] : 0;
        //isset comprueba si las variables exiten y son nulas
            if(isset($_POST['num'])){
                $numeros = $_POST['num'];
                foreach($numeros as $index => $valor){
                    echo "numero " .($index+1) .": " .$valor ."<br>";

                }
            } else{
                echo <<<END
                <html>

                    <form action="formulariodinamico02.php" method ="post">
END;

                for($i = 1; $i <= $_POST['tope'] ; $i++){
                    echo '<label for="num' .$i .'">Numero ' .$i .':</label>';
                    echo '<input type="number" id="num' .$i .'"name = num[]" placeholder= "ingresa el numero: " required><br>';

                }  
                echo<<<END

                    <input type="submit" value="Enviar">
                    </form>
                    </html>
            
END;

            }
        
        ?>

