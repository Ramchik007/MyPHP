<?php
//9.17. Дано слово. Верно ли, что оно начинается и оканчивается на одну и ту же
//букву?

$word = 'Горчица';
$word2 = 'арка';


function checkSymbol($word) {
    if (mb_substr($word,-1,1) == mb_substr($word,0,1)) {
        printf("Начальный и конечный символы в слове $word совпадают\n");
    }
    else {
        printf("Начальный и конечный символы в слове $word не совпадают\n");
    }
}

checkSymbol($word);
checkSymbol($word2);


