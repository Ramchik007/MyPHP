<?php
/* 10.43. Написать рекурсивную функцию:
а) вычисления суммы цифр натурального числа;
б) вычисления количества цифр натурального числа.
*/

function summNumber(int $n,$i=0) {
    $numberText = strval($n);
    
    if (strlen($numberText) == 1) {
        return $n;
    }

    else { 

        if ($i <= strlen($numberText)-1) {
            return (int)$numberText[$i] + (int)summNumber($n,$i + 1);
          
    } 

printf("Количество цифр натурального числа равно: %s\n",(int)strlen($numberText));
printf("Сумма цифр натурального числа равна: ");
}

}


print_r(summNumber(10500));

