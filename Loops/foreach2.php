<?php

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
    ],
    "C#" => [
        "Nome_Curso" => "Curso de C# - Fundamentos",
        "Versao_Ferramenta" => 5,
        "Carga_Horaria" => 60,
        "Status" => true
    ],

    "JavaScript" => [
        "Nome_Curso" => "Curso de JavaScript - Fundamentos",
        "Versao_Ferramenta" => 8,
        "Carga_Horaria" => 60,
        "Status" => false
    ],
];

foreach ($cursos as $curso){

    if ($curso['Status'] == false){
        continue;
//      break;
    }
    echo $curso['Nome_Curso'];
    echo "<br>";
    echo "Versao da ferramenta:" . $curso['Versao_Ferramenta']; 
    echo "<br>";
    echo "Carga horaria:" . $curso['Carga_Horaria']; 
    echo "<br>";
    echo "Status:" . $curso['Status']; 
    echo "<br>";
    echo "<br>";
}