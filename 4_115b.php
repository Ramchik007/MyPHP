<?php

const yearNames = ['Крыса', 'Корова','Тигр','Заяц','Дракон','Змея','Лошадь','Овца','Обезьяна','Петух','Собака','Свинья'];
const colors = ['Зеленый','Красный','Желтый','Белый','Черный'];


//$year any
$year = 2400;
printf($year." год ");

$result = $year - 4;


if ($result >4 ) {
    $yearName = $result % 12;
    $result = $result % 10;

    if ($result == 0 || $result == 1)
        $color = 0;
    elseif ($result == 2 || $result == 3)
        $color = 1;
    elseif ($result == 4 || $result == 5)
        $color = 2;
    elseif ($result == 6 || $result == 7)
        $color = 3;
    elseif ($result == 8 || $result == 9)
        $color = 4;
}

else {
    if ($year > 0) {
        if ($year == 3 ) {
            $yearName = 11;
            $color = 4;
        }
        elseif ($year == 2) {
            $yearName = 10;
            $color = 4;
        }
        elseif ($year == 1) {
            $yearName = 9;
            $color = 3;
        }

    }
    else {
        printf("Введите год нашей эры! \n");
    }

}

if (isset($yearName) && isset($color))
    printf(yearNames[$yearName].",".colors[$color]);
else printf("Ошибка ввода!");

