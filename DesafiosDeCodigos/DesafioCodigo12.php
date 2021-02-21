<?php

function fatorial($n)
{
        for ($i = $n-1; $i > 1; $i--) {
            $n = $n * $i;
        }
        return $n;
}

$n = intval(rtrim(fgets(STDIN)));
print(fatorial($n));