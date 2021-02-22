<?php
$t = intval(rtrim(fgets(STDIN)));

for($i = 0; $i < $t; $i++)
{
    //terminar*
    [$a, $b] = explode(' ', rtrim(fgets(STDIN)));

    try {
        if(intval($b) === 0){
             throw new Exception("Nao e possivel dividir por 0, defina outro valor". PHP_EOL);
        }
        if(!is_numeric ($b)){
            throw new Exception("Erro: Valor não pode ser convertido para inteiro: {$b}". PHP_EOL);        }
        $valor = $a / $b;
        echo $valor. PHP_EOL;

    }
        catch (Exception $e) {
        echo $e->getMessage(). PHP_EOL;
    }
        catch (DivisionByZeroError $th) {
        echo $th->getMessage(). PHP_EOL;
    }


}