<?php
/* 10.48. Написать рекурсивную функцию для вычисления максимального элемента
массива из n элементов. */

$numbers = [1,3,5,7,10,5,15,56,76,2];
$numbersNew =[4];

function maxArrayElement($array,$i = 0, $maxIndex = 0) {
    $arrayLength = count($array)-1;

    if ($i == $arrayLength) {
        return $array[$maxIndex];
    }

    else if ($array[$maxIndex] >= $array[$i]) {
            print_r("iter $i\n");
            return maxArrayElement($array, $i += 1);
    }
        else { $maxIndex = $i;
        }
}


printf(maxArrayElement($numbers));