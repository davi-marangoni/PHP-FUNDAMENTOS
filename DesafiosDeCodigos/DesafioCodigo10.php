<?php

    $palavras = explode(' ', rtrim(fgets(STDIN))); 
        
    foreach ($palavras as $value){
        echo $value .PHP_EOL;
    }