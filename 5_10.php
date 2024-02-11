<?php
/* Напечатать таблицу перевода 1, 2, ... 20 долларов США в рубли по текущему
курсу (значение курса вводится с клавиатуры). 
*/

$rate = readline("Введите курс доллара: ");
if (is_numeric($rate)) {
    $exchangeDollarRubles = [];
    for ($i = 1; $i <= 20; $i++) {
        $exchangeDollarRubles[$i] = $rate * $i;
    }
    printf("Доллары  Рубли\n");
    foreach ($exchangeDollarRubles as $key => $value) {
        if ($key <= 9) {
            printf("   $key      $value\n");
        } else {
            printf("   $key     $value\n");
        }
    }
}

else printf("Ошибка ввода");

