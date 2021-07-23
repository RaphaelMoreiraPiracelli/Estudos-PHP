<?php

// if ($operador=='/'){
//     $resultado= $n1/$n2;
// }
// if ($operador=='*'){
//     $resultado= $n1*$n2;
// }
// if ($operador=='+'){
//     $resultado= $n1+$n2;
// }
// if ($operador=='-'){
//     $resultado= $n1-$n2;
// }

$n1= $_POST['n1'];
$n2= $_POST['n2'];
$operador= $_POST['operador'];
$resultado=0;

if ($n1 == "") {
    echo 'Primeiro espaço não pode ser vazio';
    die;
}elseif ($n2 == "") {
    echo 'Segundo espaço não pode ser vazio';
    die;
}elseif ($operador == "") {
    echo 'Terceiro espaço não pode ser vazio';
    die;    
}elseif (!in_array($operador, ['+', '-', '*', '/'])){
    echo 'Digite apenas os operadores: /, *, +, -';
    die;
}

switch ($operador) {
    case '+':
        echo 'O resultado é: '. $n1+$n2;
        break;
    case '-':
        echo 'O resultado é: '. $n1-$n2;
        break;
    case '*':
        echo 'O resultado é: '. $n1*$n2;
        break;
    case '/':
        echo 'O resultado é: '. $n1/$n2;
    
}
?>
<br>
<br>
<a href="/calculadora.html">Voltar</a>

