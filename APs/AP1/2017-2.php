<?php

function GASTO_DE_CALORIAS_EM_TEMPO_CONTINUO($min, $calPorHora) {
    return $min * $calPorHora / 60;
}

function ESCALA_DE_CALORIAS($velocidades, $tempos, $listaGastoCalorico) {
    if (count($tempos) != count($velocidades) and count($velocidades) != count($listaGastoCalorico))
        return "Erro. Arrays de tamanhos diferentes.";

    $n = count($tempos);
    $totalCalorias = 0;
    $tempoTotal = 0;
    $velocidade = 0;
    for ($i = 0; $i < $n; $i++) {
        $velocidade += $velocidade[$i] * $tempoTotal[$i];
        $tempoTotal += $tempos[$i];
        $totalCalorias += GASTO_DE_CALORIAS_EM_TEMPO_CONTINUO($tempos[$i], $listaGastoCalorico[$i]);
    }
    return array($totalCalorias, $velocidade / $tempoTotal);
}

function CalComDadosBrutos($relogioMin, $alterVel, $calPorHoraPorVel) {
    $vel = 0;
    $ultimoTempo = 0;
    $max = $alterVel[0];
    $min = $alterVel[0];

    $velocidades = array();
    $tempos = array();

    $s = count($relogioMin);
    for ($i = 0; $i < $s; $i++) {
        $vel += $alterVel[$i];
        $velocidades[] = $vel;
        $tempos[] = ($relogioMin[$i] - $ultimoTempo) / 60.0;
        $ultimoTempo = $relogioMin[$i];
        if ($vel < $min)
            $min = $vel;
        if ($vel > $max)
            $max = $vel;
    }

    $escala = ESCALA_DE_CALORIAS($velocidades, $tempos, $calPorHoraPorVel);
    $calorias = $escala[0];
    $media = $escala[1];

    echo "<table><thead><tr>";
    echo "<th>Gasto calórico</th><th>Velocidade média</th><th>Velocidade máxima</th><th>Velocidade mínima</th>";
    echo "</tr></thead><tbody><tr>";
    echo "<td>{$calorias}</td><td>{$media}</td><td>{$max}</td><td>{$min}</td>";
    echo "</tr></tbody></table>";


}

function VALIDA_FORMATO_HORAS($tempo) {
    echo preg_match("/^(\d*[1-9]:)?[0-5]\d:[0-5]\d$/", $tempo) ? "<p>$tempo Ok</p>\n" : "<p>$tempo Deu ruim </p>\n";
}

VALIDA_FORMATO_HORAS('00:00');
VALIDA_FORMATO_HORAS('45:45');
VALIDA_FORMATO_HORAS('1:23:45');
VALIDA_FORMATO_HORAS('12:34:56');
VALIDA_FORMATO_HORAS('12345:00:00');

VALIDA_FORMATO_HORAS('00:00:00');
VALIDA_FORMATO_HORAS('457:45');
VALIDA_FORMATO_HORAS('1:63:45');
VALIDA_FORMATO_HORAS('1:3:75');
VALIDA_FORMATO_HORAS('1:2:3');