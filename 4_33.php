<?php
/* 4.33. Дано натуральное число.
а) Верно ли, что оно заканчивается четной цифрой?
б) Верно ли, что оно заканчивается нечетной цифрой?
Примечание
В обеих задачах составное условие не использовать.
Натуральное число будем считать целым положительным числом больше нуля.
(solve with one arithmetic operator)
*/

function areEven($num){
    $str = substr(strval($num),-1,1);
    $tetsNum = (int)$str;
    printf("Является ли число $num четным?\n");
    if ($tetsNum % 2 === 0) {
        printf("Верно\n");
    }
    else {
        printf("Неверно\n");
    }
}

function areNotEven($num){
    $str = substr(strval($num),-1,1);
    $tetsNum = (int)$str;
    printf("Является ли число $num нечетным?\n");
    if ($tetsNum % 2 === 0) {
        printf("Неверно\n");
    }
    else {
        printf("Верно\n");
    }
}


areEven(6);
areNotEven(6);
