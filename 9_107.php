<?php
//9.107. Дано слово. Поменять местами первую из букв а и последнюю из букв о.
//Учесть возможность того, что таких букв в слове может не быть.

mb_internal_encoding("UTF-8");

$word = 'AstarovorO';
//$word = 'g';
for ($i = 0; $i < mb_strlen($word); $i++) {
    if ($word[$i] == 'A' || $word[$i] == 'a'  ) {
        $indexForA = $i;
        break;
    }
    else {
        $indexForA = NULL;
    }
}

for ($i= -1; abs($i) < mb_strlen($word); $i--) {
    if ($word[$i] == 'O'|| $word[$i] == 'o') {
        $indexForO = $i;
        $symbolForO = $word[$indexForO];
        break;
    }
    else {
        $indexForO = NULL;
    }
}

if (isset($indexForA) AND isset($indexForO) AND isset($symbolForO)) {

    if ($word[$indexForA] == 'A') {
        $word[$indexForO] = 'A';
    }
    else {
        $word[$indexForO] = 'a';
    }


    if ($symbolForO == 'O') {
        $word[$indexForA] = 'O';
    }
    else {
        $word[$indexForA] = 'o';
    }
}
else {
    printf("Ошибка, слово не подходит условиям задачи\n");
    }


printf($word);


