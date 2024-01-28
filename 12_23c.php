<?php
$length = 7;
$array2 = [[]];

for ($i = 0; $i < $length; $i += 1) {
    for ($j = 0; $j < $length; $j += 1) {
        if ($i <= intdiv($length,2)) {
            if ($j >= $i && $j < $length-$i) {
                $array2[$i][$j] = 1;
            }
            else {
                $array2[$i][$j] = 0;
            }
        }

        else {

            if ($j >=$length-$i-1 && $j <= $i) {
                $array2[$i][$j] =1;
            }
            else {
                $array2[$i][$j] =0;
            }

        }
    }

}



for ($i = 0; $i < $length; $i += 1) {
    for ($j = 0; $j < $length; $j += 1) {
        printf("%s ", $array2[$i][$j]);
    }
    echo "\n";

}