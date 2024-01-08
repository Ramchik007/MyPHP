<?php
//9.166. Дано предложение. Поменять местами его первое и последнее слово.
//в рассматриваемом предложении нет начальных и конечных пробелов и символов "-";
//количество слов в предложении не превышает 10.

//$text = 'MMA is on top today!';
$text = 'MMA is on top today and tomorrow!';
$first = '';
$last='';
$charIndex = 0;
$newText='';
$lastSymbol = $text[-1];
//Временно удаляем символ завершения предложения

if ($text[-1] == '.' || $text[-1] == '!' || $text[-1] == '?'  ) {
    for ($i = 0; $i < strlen($text)-1 ; $i++) {
        $newText .= $text[$i];
    }
}


// Находим первое слово в предложении
for ($i=0; $i<=mb_strlen($newText)-1; $i++) {
    if ($newText[$i] == ' ' || $newText[$i] == ', ' ) {
        $charIndex = $i;
        break;       
    }
}

for ($j= 0; $j<$charIndex; $j++) {
    $first .= $newText[$j];
        }


// Находим последнее слово в предложении

for ($i=-1; abs($i) < mb_strlen($newText); $i--) {
    if ($newText[$i] == ' ' || $newText[$i] == ' ,' ) {
        $charIndex = $i+1;
        break;
    }
}

for ($j=$charIndex; $j <= -1; $j++) {
    $last .= $newText[$j];
        }


$result = substr_replace($newText,$last,0,strlen($first));
$result = substr_replace($result,$first,$charIndex,strlen($last));
print_r($result.$lastSymbol);


