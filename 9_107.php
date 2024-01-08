<?php
//9.107. Дано слово. Поменять местами первую из букв а и последнюю из букв о.
//Учесть возможность того, что таких букв в слове может не быть.

mb_internal_encoding("UTF-8");

$word = 'Astarovnor';

for ($i = 0; $i <= mb_strlen($word); $i++) {
    if ($word[$i] == 'A' || $word[$i] == 'a'  ) {
        $charAindex = $i;
        //print_r($word[$charAindex]);
        //print_r($charAindex);
        break;
    }
}

for ($i= -1; abs($i) <= mb_strlen($word); $i--) {
    if ($word[$i] == 'O'|| $word[$i] == 'o') {
        $charOindex = $i;
        break;
    }
}

if ($word[$charAindex]=='A') {
    $word[$charOindex] = 'A';
    
}
else {
    $word[$charOindex] = 'a';
   
}

if ($word[$charOindex]=='O') {
    $word[$charAindex] = 'O';
    
}
else {
    $word[$charAindex] = 'o';
   
}


//$word[$charOindex] = 'a';

printf($word);


