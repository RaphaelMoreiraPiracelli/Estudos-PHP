<?php

$soma = somar($_POST['numero1'], $_POST['numero2']);


function somar($valor1, $valor2) {
    return $valor1+$valor2;
}


echo $soma;