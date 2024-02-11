<?php
//9.166. Дано предложение. Поменять местами его первое и последнее слово.
//в рассматриваемом предложении нет начальных и конечных пробелов и символов "-";
//количество слов в предложении не превышает 10.

$text = 'MMA is on top today and tomorrow.';
$firstWord = '';
$lastWord = '';
$delimiter = 0;
$textWithoutLastSymbol = '';
$lastSymbol = $text[-1];

//Временно удаляем символ завершения предложения
if ($text[-1] == '.' || $text[-1] == '!' || $text[-1] == '?'  ) {
    for ($i = 0; $i < strlen($text)-1 ; $i++) {
        $textWithoutLastSymbol .= $text[$i];
    }
}

// Находим первое слово в предложении
for ($i=0; $i<=mb_strlen($textWithoutLastSymbol)-1; $i++) {
    if ($textWithoutLastSymbol[$i] == ' ' || $textWithoutLastSymbol[$i] == ', ' ) {
        $delimiter = $i;
        break;       
    }
}

for ($j= 0; $j<$delimiter; $j++) {
    $firstWord .= $textWithoutLastSymbol[$j];
        }

// Находим последнее слово в предложении

for ($i=-1; abs($i) < mb_strlen($textWithoutLastSymbol); $i--) {
    if ($textWithoutLastSymbol[$i] == ' ' || $textWithoutLastSymbol[$i] == ' ,' ) {
        $delimiter = $i + 1;
        break;
    }
}

for ($j=$delimiter; $j <= -1; $j++) {
    $lastWord .= $textWithoutLastSymbol[$j];
        }

$result = substr_replace($textWithoutLastSymbol,$lastWord,0,strlen($firstWord));
$result = substr_replace($result,$firstWord,$delimiter,strlen($lastWord));
printf($result.$lastSymbol);


