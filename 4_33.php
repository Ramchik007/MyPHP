<?php
/* 4.33. Дано натуральное число.
а) Верно ли, что оно заканчивается четной цифрой?
б) Верно ли, что оно заканчивается нечетной цифрой?
Примечание
В обеих задачах составное условие не использовать.
Натуральное число будем считать целым положительным числом больше нуля.
(solve with one arithmetic operator)
*/

function getLastDigit($number):int
{
    $convertedNumber = strval($number);
    return (int)substr($convertedNumber,-1,1);
}

function checkForEvenness($number):bool
{
    if($number % 2 === 0) {
        return true;
    }
    else {
        return false;
    }
}


function checkForNotEvenness($number):bool
{
    if($number % 2 !== 0) {
        return true;
    }
    else {
        return false;
    }
}



$number = 568;

if (checkForEvenness(getLastDigit($number))) {
    printf("Верно, число $number заканчивается четной цифрой\n");
}
else {
    printf("Неверно, число $number заканчивается нечетной цифрой\n");
}


if (checkForNotEvenness(getLastDigit($number))) {
    printf("Верно, число $number заканчивается нечетной цифрой\n");
}
else {
    printf("Неврено, число $number заканчивается четной цифрой\n");
}

