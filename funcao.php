<?php

$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];

function calcular_media($nome, $n1, $n2, $n3, $n4){
    $media=($n1+$n2+$n3+$n4)/4;
    if ($media>=6):
        echo "$nome foi aprovado com a média $media";
    else:
        echo "$nome foi reprovado";
    endif;
}

calcular_media($nome, $n1, $n2, $n3, $n4);