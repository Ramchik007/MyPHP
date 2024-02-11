<?php
/*
Вычислить значение логического выражения при всех возможных значениях логических величин X, Y и Z:
а) не (X или Y) и (не X или не Z);
б) не (не X и Y) или (X и не Z);
в) X или не Y и не (X или не Z).
(solve manually in txt file without coding)
add columns with intermediate results (e.g. col for !(x|y) and 
col for (!x|!z)) and the last one with the final result for inputs:
xyz subExpr1 subExpr2 res
000 001 010 011 100 101 110 111
*/
function printResult($result):void {
    if ($result) {
        printf("True\n");
    }
    else {
        printf("False\n");
    }
}

function getResultA($X,$Y,$Z):bool {
    return !($X || $Y) && ( !($X) || !($Z) );
}

function getResultB($X,$Y,$Z):bool {
    return !( !$X && $Y ) || ($X || !($Z));
}

function getResultC($X,$Y,$Z):bool {
    return $X || !$Y && !($X || !($Z));
}

printf("Результат выполнения выражения а:\n");
printResult(getResultA(0,0,0));
printResult(getResultA(0,0,1));
printResult(getResultA(0,1,0));
printResult(getResultA(0,1,1));
printResult(getResultA(1,0,0));
printResult(getResultA(1,0,1));
printResult(getResultA(1,1,0));
printResult(getResultA(1,1,1));

printf("Результат выполнения выражения б:\n");
printResult(getResultB(0,0,0));
printResult(getResultB(0,0,1));
printResult(getResultB(0,1,0));
printResult(getResultB(0,1,1));
printResult(getResultB(1,0,0));
printResult(getResultB(1,0,1));
printResult(getResultB(1,1,0));
printResult(getResultB(1,1,1));

printf("Результат выполнения выражения в:\n");
printResult(getResultC(0,0,0));
printResult(getResultC(0,0,1));
printResult(getResultC(0,1,0));
printResult(getResultC(0,1,1));
printResult(getResultC(1,0,0));
printResult(getResultC(1,0,1));
printResult(getResultC(1,1,0));
printResult(getResultC(1,1,1));