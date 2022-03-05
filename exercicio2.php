<?php
    // Somar valores de dois arrays
    $primeiroArray = array(20, 30, 40, 50);
    $segundosArray = array(10, 15, 25, 35, 45, 55, 60, 70);

    $valorFinal = 0;
    foreach ($primeiroArray as $numero){
        $valorFinal += $numero;
    }
    foreach ($segundosArray as $numero){
        $valorFinal += $numero;
    }

    echo $valorFinal;