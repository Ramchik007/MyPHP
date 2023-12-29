<?php
/* 2.39. Даны целые числа h, m, s (0 < h ≤ 23, 0 ≤ m ≤ 59, 0 ≤ s ≤ 59), указывающие
момент времени: "h часов, m минут, s секунд". Определить угол (в градусах)
между положением часовой стрелки в начале суток и в указанный момент
времени.
*/
date_default_timezone_set('Europe/Moscow');
printf("Текущее время в 12 часовом формате:" . date("h-i-s") ."\n");

$degPerMin = 0.5;
$degPerSec = 0.08;
$minutes = ((int)date('h')) * 60 + ((int)(date('i')));
$deviation = $minutes * $degPerMin;

printf("Текущее отклонение часовой стрелки : " . $deviation);