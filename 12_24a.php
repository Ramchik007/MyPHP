<?php

$length = 6;
$array2 = [[]];

for ($i = 0; $i < $length; $i += 1) {
    for ($j = 0; $j < $length; $j += 1) {
        if($i == 0 || $j == 0) {
            $array2[$i][$j] =1;
        }
        else {
            $array2[$i][$j] = $array2[$i][$j-1] + $array2[$i-1][$j];
        }

    }
}

for ($i = 0; $i < $length; $i += 1) {
    for ($j = 0; $j < $length; $j += 1) {
        printf("%s  ", $array2[$i][$j]);
    }
    echo "\n";

}
