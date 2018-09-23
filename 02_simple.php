<?php
/**
 * Funcion muy compleja de entender
 */

function compleja($id)
{
    $indice = $id;
    $persona = encontrar($indice);
    $NombrePersona = $persona->name;
    return $nombre = $NombrePersona;
}

/**
 * funcion mucho mas legible y simple
 */

function simple($id)
{
    $persona = encontarPersona($id);
    return $persona->nombre;
}

// Review
function getNameById($id)
{
    $person = getPersonById($id);

    return $person->name;
}
