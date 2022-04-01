<?php
// Calculadora que faz expressões simples
echo "Digite na barra acima o calculo que deseja fazer ?calculo=1+1";

if(isset($_GET['calculo'])){
    echo "<br><br>Calculo: ".$_GET['calculo'];
    if(strpos($_GET['calculo'], " ")){
        $valoresInteiros = explode(" ", $_GET['calculo']);
        $total = 0;
        foreach($valoresInteiros as $valor){
            $total += $valor;
        }
        echo "<br><br>Total: ".$total."<br>";
    }else{
        echo "<br><br>Operador invalido!";
    }
}