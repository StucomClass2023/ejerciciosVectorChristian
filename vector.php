<?php

    $empleados = array(
        'ID001' => 'Joe Smith',
        'ID002' => 'Joe Louis',
        'ID003' => 'Carla Clark',
        'ID004' => 'Jay Johnson',
        'ID005' => 'Victor Victory'
    );
    
    foreach($empleados as $x=>$y){
        echo "Codigo= " . $x . ", Representa= " . $y . "<br>";
    }

?>
