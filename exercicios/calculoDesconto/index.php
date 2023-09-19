<?php
function calcularDesconto($value, $category)
{
    if ($category == 'eletrônicos') {
        return $value - ($value * 0.10);
    } else if ($category == 'vestuário') {
        return $value - ($value * 0.20);
    } else if ($category == 'alimentos') {
        return $value - ($value * 0.05);
    } else {
        return $value;
    }
}
