<?php
// Crie um array de 10 a 20 com for;
// Faça um loop em cima do array criado dinâmicamente;
// Imprima apenas os números ímpares;

$array = [];

for ($i = 10; $i <= 20; $i++) {
    array_push($array, $i);
}

for ($j = 0; $j < count($array); $j++) {
    if ($array[$j] % 2 != 0) {
        print($array[$j] . "<br>");
    }
};
