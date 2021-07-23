<?php

while(true){
    echo "Digite algo: ";
    $input = trim(fgets(STDIN, 1024));
    echo "\n", md5($input), "\n\n";
}

?>