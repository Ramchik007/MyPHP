<?php 
/* 4.15. Известны год и номер месяца рождения человека, а также год и номер месяца
сегодняшнего дня (январь — 1 и т. д.). Определить возраст человека (число
полных лет). В случае совпадения указанных номеров месяцев считать, что
прошел полный год.
test1:
    in1 (today m y):     12 2014
    in2 (bd m y):      6 1985
    out:        29
test2:
    in1 (today m y):     5 2014
    in2 (bd m y):      6 1985
    out:        28
test3:
    in1 (today m y):     6 2014
    in2 (bd m y):      6 1985
    out:        29
*/

//$curMonth = date('m');
//$curYear = date('Y');

function calcAge() {
    //global $curMonth, $curYear;
    $birthMonth = readline("Введите месяц Вашего рождения: ");
    $birthYear = readline("Введите год Вашего рождения: ");

    if ($birthMonth <= date('m')) {
        $age = (int)date('Y') - (int)$birthYear;
    }
    else {
        $age = (int)date('Y') - (int)$birthYear -1;
    }   
    printf("Ваш возраст : ".$age);
}

calcAge();
