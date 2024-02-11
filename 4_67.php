<?php
/* 4.67. Дано целое число k (1 k 365). 
Определить, каким будет k-й день года: выходным 
(суббота и воскресенье) или рабочим, 
если 1 января — понедельник. 
4.67    
test1:
in: 5
out: Workday
test2:
in: 7
out: Weekend
*/

$day = 7;
$out = "";

$day % 7 == 6 || $day % 7 == 0 ? $out = "Weekend" : $out = "Workday";
printf("$out");
