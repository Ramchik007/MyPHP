<?php
/* 4.36. Работа светофора для пешеходов запрограммирована следующим образом: в
начале каждого часа в течение трех минут горит зеленый сигнал, затем в течение 
двух минут — красный, в течение трех минут — опять зеленый и т. д.
Дано вещественное число t, означающее время в минутах, прошедшее с начала очередного 
часа. Определить, сигнал какого цвета горит для пешеходов в
этот момент.
(solve with one ternary operator)
test1:
in: 3
out: red
test2:
in: 5
out: green
*/

$time = 3.0;
$timeByStep = -0.01;
$step = 0;

while ($timeByStep <= $time) {
    $timeByStep = $timeByStep + 3;
    $step += 1;
    if ($timeByStep > $time) {
        break;
    }
    else {
        $timeByStep = $timeByStep + 2;
        $step += 1;
    }
}

$color = $step % 2 == 0 ? printf("red") : printf("green");


