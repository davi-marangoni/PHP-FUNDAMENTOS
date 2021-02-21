<?php

function anoBissexto($ano) 
{
    if ($ano %4 === 0){
        if($ano %100 ===0){
            if($ano %400 ===0){
                return true;
            }
            return false;
        }
        return true;
    }else{
        return false;
    }
}

$ano = intval(rtrim(fgets(STDIN)));
print(anoBissexto($ano) ? "Ano bissexto" : "Não é ano bissexto");