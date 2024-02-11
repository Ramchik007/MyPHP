<?php
/* 2.39. Даны целые числа h, m, s (0 < h ≤ 23, 0 ≤ m ≤ 59, 0 ≤ s ≤ 59), указывающие
момент времени: "h часов, m минут, s секунд". Определить угол (в градусах)
между положением часовой стрелки в начале суток и в указанный момент
времени.
*/

date_default_timezone_set('Europe/Moscow');
$currentTime = time();
$hours = idate('h',$currentTime);
$minutes = idate('i',$currentTime);
$seconds = idate('s',$currentTime);

function convertTimeToMinutes($hours, $minutes, $seconds):float {
    return $hours * 60 + $minutes + $seconds / 60;
}

function printReceivedTimeStamp($hours,$minutes,$seconds):void
{
    printf("Для времени $hours:$minutes:$seconds\n");
}


printReceivedTimeStamp($hours,$minutes,$seconds);

$deviationPerMinute = 0.5;
$deviationPerSecond = 0.08;
$minutes = convertTimeToMinutes($hours,$minutes,$seconds);
$deviation = round(($minutes * $deviationPerMinute),2);

printf("Отклонение часовой стрелки : $deviation градусов/градуса ");

