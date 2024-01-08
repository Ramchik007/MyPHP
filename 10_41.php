<?php
//10.41. Написать рекурсивную функцию для вычисления факториала натуральногочисла n.

function toFactorial($n) {

    if ($n <= 1) {
        
        return $n;
    }
    else {
        
        return $n * toFactorial($n - 1);
        
    }
       
}

$n = readline("Введите натуральное число для вычисления факториала: ");
if (is_numeric($n) && $n > 0) {
    printf("!$n = %s.",toFactorial((int)$n));
}
else {
    printf("ошибка ввода!");
}

