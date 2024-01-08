<?php
/* 10.44. Написать рекурсивную функцию нахождения цифрового корня натурального
числа. Цифровой корень данного числа получается следующим образом. Ес-
ли сложить все цифры этого числа, затем все цифры найденной суммы
и повторять этот процесс, то в результате будет получено однозначное число
(цифра), которая и называется цифровым корнем данного числа.
*/
function summNumber(int $n,$i=0) {
    $numberText = strval($n);
    
    if (strlen($numberText) == 1) {
        return $n;
    }

    else { 

        if ($i <= strlen($numberText)-1) {
            return (int)$numberText[$i] + (int)summNumber($n,$i + 1);
        }
    } 

}

function digSquare(int $n, $i =0) {
    $numberText = strval($n);

    if (strlen($numberText) == 1) { 
        return $n;
        
    }

    else {
        if (strlen($numberText) > 1) {
            //return summNumber($n);
            return digSquare(summNumber($n));
        }
    }
}


printf(digSquare(98756));
