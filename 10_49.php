<?php
/*
 10.49. Написать рекурсивную функцию для вычисления индекса максимального
элемента массива из n элементов.
 */

$numbers = [1,3,5,7,10,5,15,56,76,-6,2,250];


function maxArrayElement($array,$i = 0, $maxIndex = 0)
{
    $arrayLength = count($array) - 1;

    if ($i <= $arrayLength) {
        if ($array[$maxIndex] <= $array[$i]) {
            $maxIndex = $i;
        }
        else {
            echo(NULL);
        }

        return maxArrayElement($array, $i + 1,$maxIndex);

    } else {
        return $maxIndex;
    }
}

printf("Индекс максимального элемента массива равен %s.",maxArrayElement($numbers));
