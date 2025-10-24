<?php
$gente = array (
 array(
 'Familia' => 'Los Simpson',
 'Padre' => 'Homer',
 'Madre' => 'Marge',
 'Hijos' => array('Bart', 'Lisa' , 'Maggie')
 ),
 array(
 'Familia' => 'Los Griffin',
 'Padre' => 'Peter',
 'Madre' => 'Lois',
 'Hijos' => array('Chris', 'Meg' , 'Stewie')
 )
 );

 
foreach($gente as $indice =>$valor){
    echo"Familia" .($indice +1) .":<br>";
    echo"<ul>";
    foreach($valor as $nombres => $dato){
        
        if(is_array($dato)){
            echo"<li>$nombres: <br></li>";
            foreach($dato as $cont){
                echo"<ul>";
                echo"<li>$cont </li>";
                echo"</ul>";
            }
        }else{
            echo"<li>$nombres: $dato<br></li>";
        }
    }
    echo"<br>";
    echo"</ul>";
}

 ?>