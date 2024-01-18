<?php
/*
10.56.* Написать рекурсивную функцию, определяющую, является ли заданное натуральное число
простым (простым называется натуральное число,
большее 1, не имеющее других делителей, кроме единицы и самого себя).
*/
$check = [];
function simpleNumber($number,$n=2)
{
    global $check;
    if ($n <= intdiv($number,2)) {
        if (($number % $n == 0) && ($number != $n))  {
            $check[] = 2;
            simpleNumber($number,$n+1);
        }
        else {
            simpleNumber($number,$n+1);
        }

    }

    if (count($check) == 0) {
       return "Simple";
    }
    else {
        return 'NonSimple';
    }

}

printf(simpleNumber(2));
