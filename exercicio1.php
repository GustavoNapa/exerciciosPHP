<?php
    // Sequencia de fibbonacci
    // A sequencia de fibbonacci consiste em uma sequencia onde cada numero é resultado da soma dos 2 numeros anteriores
    $primeiroNumero = 0;
    $segundoNumero = 1;

    $quantidadeNumerosParaImprimir = 15;

    for ($i=0; $i < $quantidadeNumerosParaImprimir; $i++) { 
        $fibbonacci = $primeiroNumero+$segundoNumero;
        if ($i > 0) echo ", ";
        echo $primeiroNumero;
        $primeiroNumero = $segundoNumero;
        $segundoNumero = $fibbonacci;
    }