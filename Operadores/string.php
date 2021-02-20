<?php


$escola = "TreinaWeb";
$curso = ["PHP", "C#", "JAVA"];


$frase = "Faça o curso de " . $curso . " na escola " . $escola;

$string1 = "Faça o curso de {$curso[2]} na escola {$escola}";

$string2 = 'Faça o curso de $curso na escola $escola';

echo $string1;


