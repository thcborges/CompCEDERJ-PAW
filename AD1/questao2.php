<?php

function maisRicos($bens) {
    $populacao = count($bens);
    for ($ricos = 0, $soma = 0; $soma < array_sum($bens)/2; $ricos++) {
        $soma += $bens[$ricos];
    }
    return $ricos / $populacao * 100;
}


echo maisRicos(array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1)) . "%\n";
