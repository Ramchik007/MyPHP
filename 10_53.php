<?php
/*Написать рекурсивную процедуру для ввода с клавиатуры последовательности чисел и вывода ее на экран
в обратном порядке (окончание последовательности — при вводе нуля).replace input with array
 */
$numbers = [1,2,3,4,5,6,7];
function reversPrompt($numbers,$n=0)
{

    $arrayLength = count($numbers);
    if($n <= $arrayLength - 1) {
        reversPrompt($numbers,$n+1);
        printf($numbers[$n]);

    }

}

reversPrompt($numbers);


