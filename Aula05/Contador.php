<?php
/**
 * User: thcbo
 * Date: 06/02/2018
 * Time: 20:38
 */

class Contador {
    // variáveis
    var $cont = 0;
    var $inicio = 0;

    // Métodos
    function IniciaContadorEm($i) {
        $this->cont = $i;
        $this->inicio = $i;
    }

    function Incrementa() {
        $this->cont++;
    }

    function reset() {
        $this->cont = $this->inicio;
    }

    function EscreveValor() {
        return $this->cont;
    }
}