<?php

const yearNames = ['Крыса', 'Корова','Тигр','Заяц','Дракон','Змея','Лошадь','Овца','Обезьяна','Петух','Собака','Свинья'];
const colors = ['зеленый','красный','желтый','белый','черный'];
$year = 1984;
printf($year." год ");

$result = $year - 1984;

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


printf(yearNames[$yearName].",".colors[$color]);



