<?php
/*
 * Дан массив. Переписать его элементы в другой массив такого же размера
следующим образом: сначала должны идти все отрицательные элементы,
а затем все остальные. Использовать только один проход по исходному
массиву.
*/

$array = [1,0,2,3,-5,6];
$result1=[];
$result2 =[];
$resultArray=[];
for($i=0; $i< count($array); $i += 1) {
    if(($array[$i]<0) && (!in_array($array[$i],$result1))) {
        $result1[] = $array[$i];
    }
    else {
        if(!in_array($array[$i],$result2)) {
            $result2[] = $array[$i];
        }
    }
}

$resultArray = array_merge($result1,$result2);
print_r($resultArray);
//print_r($result2);
