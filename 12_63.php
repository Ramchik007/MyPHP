<?php

$height = 11;
$width = 4;
$sum = 0;

for ($i = 1; $i <= $height; $i++) {
    for ($j = 1; $j <= $width; $j++) {
        $pupils[$i][$j] = rand(20, 30);
        $sum += $pupils[$i][$j];

    }
    printf("Среднее количество учеников в $i классе равно %s\n", (int)($sum / 4));
    $sum = 0;

}

$format = '% 3d класс: ';
for ($i = 1; $i <= $height; $i++) {
    printf(sprintf($format,$i));
    for ($j = 1; $j <= $width; $j++) {
        printf($pupils[$i][$j] . " ");
    }
    printf("\n");

}


