<?php
function generarContrasena($longitud = 12, $usarNumeros = true, $usarMayusculas = true, $usarMinusculas = true, $usarSimbolos = true) {
    $numeros = '0123456789';
    $mayusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minusculas = 'abcdefghijklmnopqrstuvwxyz';
    $simbolos = '!@#$%^&*()-_=+<>?';
    
    $caracteres = '';
    if ($usarNumeros) {
        $caracteres .= $numeros;
    }
    if ($usarMayusculas) {
        $caracteres .= $mayusculas;
    }
    if ($usarMinusculas) {
        $caracteres .= $minusculas;
    }
    if ($usarSimbolos) {
        $caracteres .= $simbolos;
    }
    
    if (empty($caracteres)) {
        return 'Error: Debes seleccionar al menos un tipo de carácter.';
    }
    
    $contrasena = '';
    $max = strlen($caracteres) - 1;
    for ($i = 0; $i < $longitud; $i++) {
        $contrasena .= $caracteres[random_int(0, $max)];
    }
    
    return $contrasena;
}

// Ejemplo de uso
echo "Contraseña generada: " . generarContrasena(16, true, true, true, true);
?>