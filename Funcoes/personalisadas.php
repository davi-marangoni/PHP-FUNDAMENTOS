<?php

function somar($valor1, $valor2)
{
    echo "Antes do return";
    echo "<br>";
    return  $valor1 + $valor2;
    echo "Depois do return, nao e chamado";
}

$soma = somar(12 ,10);

echo $soma;
echo "<br>";

$soma = somar(120 ,100);

echo $soma;
echo "<br>";

echo somar(13, 90);
echo "<br>";