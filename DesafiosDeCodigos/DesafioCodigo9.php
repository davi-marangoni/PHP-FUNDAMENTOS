<?php
    $n = intval(rtrim(fgets(STDIN)));
    $i = 1;
    while($i <= 10){
        $resultado = $n*$i;
        echo "$n x $i = $resultado" . PHP_EOL;;
        $i++;
    }