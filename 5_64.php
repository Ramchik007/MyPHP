<?php
/*5.64. В области 12 районов. Известны количество жителей (в тысячах человек)
и площадь (в км 2 ) каждого района. Определить среднюю плотность населения
по области в целом.
pass array via method arg (not a class-level variable) 
*/

$population = [];
$handicap = 10000;
for ($i = 1; $i <= 12; $i++) {
    $population[$i] = $handicap;
    $handicap += 10000;
}


$cityArea = [];
$handicap = 20000;
for ($i = 1; $i <= 12; $i++) {
    $cityArea[$i] = $handicap;
    $handicap += 10000;
}


$density = [];

for ($i = 1; $i <= 12; $i++) {
    $density[$i] = $population[$i] / $cityArea[$i];
}

$averageDensity = array_sum ($density) / count ($density);
$averageDensity = round($averageDensity,2);
printf($averageDensity);

