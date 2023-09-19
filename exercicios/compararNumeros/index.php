<?php
function compararNumeros($a, $b)
{
    if ($a > $b) {
        return "O primeiro número é maior.";
    } else if ($b > $a) {
        return "O segundo número é maior.";
    } else if ($a == $b) {
        return "Os números são iguais.";
    }
}

compararNumeros(2, 3);
compararNumeros(3, 2);
compararNumeros(2, 2);
