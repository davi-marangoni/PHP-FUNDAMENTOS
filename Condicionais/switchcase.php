<?php

$a = 5;

switch($a){
    case 0:
        echo 'Tenho o valor 0';
     break;
    case 1:
        echo 'Tenho o valor 1';
    break;
    case 2:
    case 3:
    case 4:
    case 5:
       echo 'Tenho um valor entre 2 e 5';
    break;
    default:
        echo 'Tenho outro valor';
    break;
}
echo "<br>";
$curso = 'Python';

switch($curso){
    case 'PHP':
        echo 'Curso de PHP';
        break;
    case 'JAVA':
        echo 'Curso de Java';
        break;
    case 'C#':
        echo 'Curso de C#';
        break;
    default:
        echo 'Outro curso';
    break;
}


// switch ($variable) {
//     case 'value':
//         # code...
//         break;
    
//     default:
//         # code...
//         break;
// }
