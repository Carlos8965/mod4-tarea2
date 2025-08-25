<?php
// Función que invierte un array
function invertirLista($array) {
    return array_reverse($array);
}

//Se colocan numeros a invertir
$numeros = [1, 2, 3, 4, 5];
print_r(invertirLista($numeros));