<?php

/**
 * Funcion que retorna el valor de pi que no es necesario
 */

function pi()
{
    $pi = obtenerDeBaseDeDatos('PI');
    return $pi;
}

/**
 * Si se puede declarar en una constante
 */

define("PI", 3.1416);

function calcularAreaCirculo($radio)
{
    return PI * pow($radio, 2);
}

// Review
