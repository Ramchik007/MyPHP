<?php
/* В трехзначном числе x зачеркнули его вторую цифру. Когда к образованному
при этом двузначному числу справа приписали вторую цифру числа x, то получилось число n. 
По заданному n найти число x (значение n вводится с клавиатуры, 100 ≤ n ≤ 999).
*/

$n = readline("Введите число N 0т 100 до 999: ");
if ( is_numeric($n) && ($n > 99) && ($n < 1000) ) {
    $stringForN = strval($n);
    $lastDigit = substr($stringForN,-1,1);
    $bufferForSecondDigit = $stringForN[1];
    $stringForN[1] = $lastDigit;
    $stringForN[2] = $bufferForSecondDigit;
    printf("Результат X равен $stringForN.");
}
else {
    printf("Ошибка ввода!");
}
