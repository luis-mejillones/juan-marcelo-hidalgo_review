<?php

/**
 * Cabecera en todas las paginas web inpresas
 */

echo 'Cabecera con botoneria repedita en cada pagina del sitio web';

/**
 * Mejoramos lo anterior en una funcion que es llamada en cada pagina
 * asi el cambio solo es en la funcion y se refleja en todas las paginas.
 */

function mostarCabeceraDelSitioWeb()
{
    return 'Cabecera con botoneria repedita en cada pagina del sitio web';
}

// Review
/*
Pienso que para desplegar la cabecera de un sitio web, no es suficiente una función, deberia
declararse una clase que maneje los componentes de la cabecera y adicionalmente clases que
gestionen cada componente y sus dependencias.
*/