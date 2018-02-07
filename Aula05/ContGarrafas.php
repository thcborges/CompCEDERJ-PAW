<?php
/**
 * User: thcbo
 * Date: 07/02/2018
 * Time: 08:57
 */
include "Contador.php";

class ContGarrafas extends Contador {
    // Adiciona 12 garrafas ao contador
    function AdicionaCaixa() {
        $this->cont += 12;
    }

    function NumeroDeCaixas() {
        return ceil($this->cont/12);
    }

    function __construct($inicio) {
        $this->cont = $inicio;
    }
}