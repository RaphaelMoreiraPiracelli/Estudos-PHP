<?php

//imprimindo vetor

$arr=["a", "b","c","d","e","f"];

for ($i= 0; $i<10; $i++){
    echo $arr[$i];
}

//ordem crescente (rsort = descrescente)

$num=array(6, 5, 3, 34, 3456, 20, 1, 7);
    
rsort($num);
print_r($num);

