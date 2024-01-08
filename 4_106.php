<?php
/* 4.106. Составить программу, которая в зависимости от порядкового номера дня ме-
сяца (1, 2, ..., 12) выводит на экран время года, к которому относится этот
месяц.
*/

$inDate =  date('d : m');

$inMonth = (int)date('m');

switch ($inMonth) {
    
    case $inMonth == 12 || $inMonth ==  1 || $inMonth ==  2 :
        echo "Зима";
        break;
    case $inMonth ==  3 || $inMonth ==  4 || $inMonth ==  5 :
        echo "Весна";
        break;
    case $inMonth ==  6 || $inMonth ==  7 || $inMonth ==  8 :
        echo "Лето";
        break;
    case $inMonth ==  9 || $inMonth ==  10 || $inMonth ==  11 :
        echo "Осень";
        break;    

}
