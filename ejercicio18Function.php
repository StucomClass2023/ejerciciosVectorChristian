<?php

    $llaves = array(
        'J' , 'Barca' , 'Sonar'
    );

    $nombres = array(
       'Jose Miguel' , 'Christian' ,  'Jordy'
    );

    $lugar = array(
        'Barcelona' , 'Madrid' ,  'Paris'
     );

    function combi($array1, $array2){       
        echo "<br>" . "**************************************"."<br>";
        foreach ($combinar = array_combine($array1, $array2) as $array1 => $array2){
            echo '<option value="">' . "Codigo= " . $array1 . ", Representa= " . $array2  . '</option>';            
        }
        echo "**************************************" . "<br>";
        return $combinar;
    }
?>
    
