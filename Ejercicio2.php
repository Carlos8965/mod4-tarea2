<?php
// Función que suma los números pares de un array
function sumaPares($array) {
    $suma = 0;
    foreach ($array as $num) {
        if ($num % 2 == 0) {
            $suma += $num;
        }
    }
    return $suma;
}
// Ejemplo:
$numeros = [1, 2, 3, 4, 5, 6];
echo sumaPares($numeros); // Salida: 12