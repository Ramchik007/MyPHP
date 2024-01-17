<?php
/*
 * Написать рекурсивную процедуру перевода натурального числа из десятичной
 * системы счисления в N-ричную. Значение N в основной программе вводится
 * с клавиатуры (2 N 16).
 * if/switch to map A-F letters
*/

$result = [];
function interpretate($number,$metric,$i=0)
{
    $ratio = $number;

    if ($ratio >= $metric) {
        $ratio = intdiv($number,$metric);
        $balance = $number % $metric;
        //printf($i);
        $result[$i] = $balance;
        interpretate($ratio,$metric, $i + 1);

    }
    else {
        //printf($i);
        $result[$i] = $ratio;


    }

    print_r($result);

}

interpretate(450,8);
//printf(450 % 8);
