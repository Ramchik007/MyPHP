<?php
/*Написать рекурсивную процедуру для вывода на экран цифр натурального
числа в обратном порядке.*/

function printReverse($number,$n = -1): void
{
    $aversString = strval($number);
    $numberLength = strlen($aversString);
    if(abs($n) <= $numberLength) {
        printf($aversString[$n]);
        printReverse($number,$n-1);
    }
}

printReverse(548874);
