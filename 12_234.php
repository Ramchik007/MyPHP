<?php
/*  Дан двумерный массив.
а) Удалить из него k-ю строку.
б) Удалить из него s-й столбец.  */
//require(__DIR__.'\12_25.php');

function deleteLine($array,$k)
{
    $height = $length =10;
    for ($i = $k; $i<$height-1; $i++) {
        for ($j=0; $j<$length; $j++) {
            $array[$i][$j] = $array[$i+1][$j];
        }
    }

    for ($i = $height -1; $i<$height; $i++) {
        for ($j=0; $j<$length; $j++) {
            $array[$i][$j] =0;
        }
    }
    return $array;

}

function deleteColumn($array,$s)
{
    $height = $length =10;
    $j=$s;
    while($j<$length-1) {
    for ($i = 0; $i<$height; $i++) {
            $array[$i][$j] = $array[$i][$j+1];

        }
    $j++;
    }

    $j=$length-1;
    for ($i= $height -1; $i>=0; $i--) {
        $array[$i][$j] =0;
    }
    return $array;

}

function printArray($array, $length = 10, $height = 10): void
{
    for ($i = 0; $i < $height; $i += 1) {
        for ($j = 0; $j < $length; $j += 1) {
            printf(sprintf("%'  4d ",$array[$i][$j] . " "));
        }
        printf("\n");
    }
    printf("\n");
}

// array generation
$array = [[]];
$num =0;
for($i=0; $i<=9; $i++) {
    for($j=0; $j<=9; $j++) {
        $array[$i][$j] = $num;
        $num++;
    }
}


printArray($array, $length = 10, $height = 10);

//удаление строки

printArray(deleteLine($array,$k=4));

printArray(deleteColumn($array,$s=4));
//удаление столбца

