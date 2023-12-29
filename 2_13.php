<?php
//2.13. Дано трехзначное число. Найти число, полученное при прочтении его цифр справа налево.



function toRevers($num) {
    $str = strval($num);
    $strres ='';
    for ($i = -1; abs($i) <= strlen($str); $i--) {
        $strres .= $str[$i];
    }
    $result = (int)$strres;
    return $result;

}

$num = readline("Введите цифру от 101 до 199:  \n");
if (is_numeric($num) && $num >100 && $num <200) {
    printf("Результат = ".toRevers($num));
}
else {
    printf("Ошибка ввода....");
}
