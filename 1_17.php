<?php 

//Записать по правилам изучаемого языка программирования следующие выражения:
//о)
function toRadians($degree) {
    return ((3.14/180)*$degree);
} 



$x = readline("Enter the value of x:\n");

if(is_numeric($x)) {
    $x = toRadians($x);
    $result = sqrt(1-(sin($x)*sin($x)));
    echo "Задача о)";
    printf("Результат = {$result}\n");
    }
else {
    printf("Error, value is not a number!\n");
}


echo "Задача п)";
$a = 2; 
$b = 3;
$c = 4;
$x = 5; 
$result = (1/(sqrt($a * ($x**2) + $b*$x + $c)));
printf("Результат = {$result}\n");



echo "Задача р)";
$x = 9;
$result = (sqrt($x +1) + sqrt($x-1)) / (2*sqrt($x)); 
printf("Результат = {$result}\n");


echo "Задача c)";
$x = 9;
$result = abs($x) + abs($x+1);
printf("Результат = {$result}\n");