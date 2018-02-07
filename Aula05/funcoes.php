<?php
function display_logo() {
    echo "<hr style='width: 50px; margin-left: 10px'>";
    echo "<img src='images/logo.png' style='width: 70px'>";
    echo "<hr style='width: 50px; margin-left: 10px'>";
    return;
}

function format_nome() {
    $prim_nome = "Maria";
    $sobrenome = "Silva";
    $nome = $sobrenome.", ".$prim_nome;
    return $nome;
}


$prim_nome = "Maria";
$sobrenome = "Silva";
function formatNome() {
    global $prim_nome, $sobrenome;
    $nome = $sobrenome.", ".$prim_nome;
    return $nome;
}

function calcula_soma($n1, $n2) {
    return $n1 + $n2;
}

function calculaSoma($n1=1, $n2=1) {
    return $n1 + $n2;
}

function somaArray($array) {
    $soma = 0;
    foreach ($array as $item) {
        $soma += $item;
    }
    echo $soma;
}

function dobro(&$var) {
    $var *= 2;
}

?>
