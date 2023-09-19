<?php
$x = 4;
$fim = 30;

while ($x < $fim) {
    echo "$x" . PHP_EOL;

    if ($x == 24) {
        break;
    }
    $x += 2;
}
