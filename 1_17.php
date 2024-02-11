<?php
//Записать по правилам изучаемого языка программирования следующие выражения: о,п,р,с
const Pi = 3.14;
$taskItem = '';
function convertToRadians($degree):float {
    return ((Pi/180)*$degree);
}

function printResult($taskItem,$result,):void
{
    printf("Задание $taskItem : Результат = $result\n");
}

$taskItem = 'о';
$x = readline("Введите значение x:");

if(is_numeric($x)) {
    $x = convertToRadians($x);
    $result = sqrt(1 - (sin($x) * sin($x)) );
    printResult($taskItem,$result);
    }
else {
    printf("Ошибка ввода, Для задания $taskItem Вы ввели не число! Вы ввели $x\n");
}

$taskItem = 'п';
$a = 2; $b = 3;
$c = 4; $x = 5;
$result = ( 1 / (sqrt($a * ($x ** 2) + $b * $x + $c)));
printResult($taskItem,$result);


$taskItem = 'р';
$x = 9;
$result = (sqrt($x + 1) + sqrt($x-1)) / ( 2 * sqrt($x));
printResult($taskItem,$result);


$taskItem = 'с';
$x = 9;
$result = abs($x) + abs($x+1);
printResult($taskItem,$result);
