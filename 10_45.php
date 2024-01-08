<?php
/* 10.45. Даны первый член и разность арифметической прогрессии. Написать рекур-
сивную функцию для нахождения:
а) n-го члена прогрессии;
б) суммы n первых членов прогрессии.
*/
function findProgression(int $a, int $d, int $n ) {
    
    if ($n == 1) {
        return $a;
    }
    else {
        if ($n > 0) {
        return $d + findProgression($a,$d,$n-1); 
        }
  
    }

}


function summProgression(int $a , int $d , int $n) {
    if ($n == 1) {
        return $a;
    }

    else {
        if ($n > 0) {

            return $a + summProgression($a,$d,$n-1) + ($n-1)*$d;
        }
    }
}

printf(findProgression(1,2,5));
printf(summProgression(1,2,5));
