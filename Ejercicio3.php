<?php
// Función que cuenta la frecuencia de caracteres en una cadena
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    return $frecuencia;
}
// Ejemplo:
$texto = "hola mundo";
print_r(frecuenciaCaracteres($texto));