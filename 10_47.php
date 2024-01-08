<?php 
/* 10.47. Написать рекурсивную функцию для вычисления k-го члена последователь-
ности Фибоначчи. Последовательность Фибоначчи f 1 , f 2 , ... образуется по
закону: f 1 1; f 2 1; f i = fi-1 + fi-2 ( i 3, 4, ...).  */

function fibonacci($q) {
    
    if ($q == 1 || $q == 2) {
        return 1;
    }
    else {
            return fibonacci($q - 1) + fibonacci($q - 2 );
        }
}


printf(fibonacci(6));


