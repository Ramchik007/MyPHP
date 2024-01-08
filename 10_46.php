<?php
/* 10.46. Даны первый член и знаменатель геометрической прогрессии. Написать ре-
курсивную функцию:
а) нахождения n-го члена прогрессии;
б) нахождения суммы n первых членов прогрессии. */

function findProgression(int $b, int $q, int $n ) {
    
    if ($n == 1) {
        return $b;
    }
    else {
        if ($n > 0) {
        return $q * findProgression($b,$q,$n-1); 
        }
  
    }

}

function summProgression(int $b , int $q , int $n) {
    if ($n == 1) {
        return $b;
    }

    else {
        if ($n > 0) {

            return $q**($n-1)  + summProgression($b,$q,$n-1);
        }
    }
}


printf(findProgression(1,2,7));
printf(summProgression(1,2,6));