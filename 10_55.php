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
        if ($balance < 10) {
            $result[$i] = $balance;
            interpretate($ratio,$metric, $i + 1);
        }
        else {
            switch ($balance) {
                case 10:
                    $result[$i] = 'A';
                    break;
                case 11:
                    $result[$i] = 'B';
                    break;
                case 12:
                    $result[$i] = 'C';
                    break;
                case 13:
                    $result[$i] = 'D';
                    break;
                case 14:
                    $result[$i] = 'E';
                    break;
                case 15:
                    $result[$i] = 'F';
                    break;

            }
            interpretate($ratio,$metric, $i + 1);
        }

    }
    else {

        $result[$i] = $ratio;


    }

    foreach ($result as $elem) {
        echo $elem;
    }

}

interpretate(650,16);

