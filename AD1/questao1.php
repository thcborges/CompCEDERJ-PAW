<?php

function aproximaRaizQuadradaFor($n) {
    for ($soma = 1, $incremento = 1, $raiz = 1; $soma < $n; $incremento += 2, $raiz++, $soma += $incremento){}
    return $raiz;
}


function aproximaRaizQuadrada($n) {
    $soma = $incremento = $raiz = 1;
    while ($soma < $n) {
        $incremento += 2;
        $raiz++;
        $soma += $incremento;
    }
    return $raiz;
}

echo aproximaRaizQuadradaFor(1) . "\n";
echo aproximaRaizQuadradaFor(4) . "\n";
echo aproximaRaizQuadradaFor(9) . "\n";
echo aproximaRaizQuadradaFor(17) . "\n";
echo aproximaRaizQuadradaFor(25) . "\n";
echo aproximaRaizQuadradaFor(36) . "\n";

echo aproximaRaizQuadrada(1) . "\n";
echo aproximaRaizQuadrada(4) . "\n";
echo aproximaRaizQuadrada(9) . "\n";
echo aproximaRaizQuadrada(16) . "\n";
echo aproximaRaizQuadrada(25) . "\n";
echo aproximaRaizQuadrada(36) . "\n";
