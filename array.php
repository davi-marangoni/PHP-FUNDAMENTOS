<?php

$linguagens = ["PHP", "C#", "JAVA"];

$linguagens[] = "Python";

// var_dump($linguagens);

$linguagens2 = array("PHP", "C#", "JAVA");

// $curso = ["Curso de PHP - Fundamentos", 7.4, 40, true];

$curso = [
    "Nome_Curso" => "Curso de PHP - Fundamentos",
    "Versao_Ferramenta" => 7.4,
    "Carga_Horaria" => 40,
    "Status" => true
];


$curso["Pre-Requisito"] = "Logica de programacao";

// var_dump($curso);

$numeros = [
    [1, 2, 3, 4],
    [5, 6, 7 ,8 ,9],
    [10, [11, 12 , 13]]
];
// //echo $numeros[0][2];
// echo $numeros[2][1][2];


$cursos = [
    "php" => [
    "Nome_Curso" => "Curso de PHP - Fundamentos",
    "Versao_Ferramenta" => 7.4,
    "Carga_Horaria" => 40,
    "Status" => true 
    ],
    "java" => [
        "Nome_Curso" => "Curso de Java - Fundamentos",
        "Versao_Ferramenta" => 11.4,
        "Carga_Horaria" => 30,
        "Status" => false 
    ]
];

$cursos["php"]["pre-requisito"] = "Logica de programacao";

echo $cursos["php"]["pre-requisito"];

// echo $cursos["java"]["Nome_Curso"];



