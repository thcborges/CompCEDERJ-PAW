<?php


function resolveExpressao($expressao) {
    for ($i = 0; $i < strlen($expressao); $i++)
        if (!preg_match("/(\+|-|\x|\/|\d)/",$expressao[$i]))
            return "ERRO! Operador não reconhecido. Abortando.";

    preg_match_all('/\d+/', $expressao, $valores);
    preg_match_all('/\+|-|\x|\//', $expressao, $operadores);
    $valores = $valores[0];
    $operadores = $operadores[0];

    if (sizeof($valores) <= sizeof($operadores)) {
        return "Erro! Quantidade de operadores excedidas.";
    }

    $total = $valores[0];
    for ($i = 1; $i < sizeof($valores); $i++) {
        switch ($operadores[$i - 1]) {
            case "+":
                $total += $valores[$i];
                break;
            case "-":
                $total -= $valores[$i];
                break;
            case "x":
                $total *= $valores[$i];
                break;
            case "/":
                if ($valores[$i] == 0)
                    return "ERRO! Divisão por 0";
                $total /= $valores[$i];
                break;
        }
    }

    return $total;
}


echo resolveExpressao('5+2 -3 *4/2 /4') . "\n";
echo resolveExpressao('5+2-3*4/2/4*') . "\n";
echo resolveExpressao('5+2-3*-4/2/4') . "\n";
echo resolveExpressao('5+2') . "\n";
echo resolveExpressao('2+2*5-2/3') . "\n";
