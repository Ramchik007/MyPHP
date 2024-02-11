<?php
//2.13. Дано трехзначное число. Найти число, полученное при прочтении его цифр справа налево.
function reverseString($userInputNumber):string {
    $resultString = '';
    for ($i = -1; abs($i) <= strlen($userInputNumber); $i--) {
        $resultString .= $userInputNumber[$i];
    }
    return $resultString;
}

$userInputNumber = readline("Введите трехзначное число (от 100 до 999):  \n");
if (is_numeric($userInputNumber) && ($userInputNumber > 99) &&  ($userInputNumber < 1000) ) {
    printf("Результат = ".reverseString($userInputNumber));
}
else {
    printf("Ошибка ввода! Вы ввели $userInputNumber\n");
}
