<?php
/* 4.106. Составить программу, которая в зависимости от порядкового номера дня ме-
сяца (1, 2, ..., 12) выводит на экран время года, к которому относится этот
месяц.
*/

$date =  date('d : m');

$month = (int)date('m');

switch ($month) {
    
    case $month == 12 || $month ==  1 || $month ==  2 :
        echo "Зима";
        break;
    case $month ==  3 || $month ==  4 || $month ==  5 :
        echo "Весна";
        break;
    case $month ==  6 || $month ==  7 || $month ==  8 :
        echo "Лето";
        break;
    case $month ==  9 || $month ==  10 || $month ==  11 :
        echo "Осень";
        break;    

}
