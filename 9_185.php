<?php
/*
9.185.*Строка содержит арифметическое выражение, в котором используются круглые скобки, в том числе вложенные. П
роверить, правильно ли в нем рас-ставлены скобки.а) Ответом должны служить слова да или нет.
б) В случае неправильности расстановки скобок:если имеются лишние правые (закрывающие) скобки, то выдать сооб-
щение с указанием позиции первой такой скобки;если имеются лишние левые (открывающие) скобки, то выдать сообще-
ние с указанием количества таких скобок. Если скобки расставлены правильно, то сообщить об этом.
*/
$str = "(a + b))) - ((c*(d+a)))";
$openCount = 0;
$closeCount = 0;

$errCloseIndex = null;

function calcTagCount($substr):int {
    $tagCount = 0;
    for ($i=0; $i <= strlen($substr)-1; $i+=1) {
        if ($substr[$i] == '(') {
            $tagCount +=1;
        }
    }
    return $tagCount;
}


for ($i=0; $i <= strlen($str)-1; $i++) {
    if ($str[$i] == '(') {
        $openCount +=1;
    }

    else if($str[$i] == ')') {
        $closeCount +=1;
    }
}


if ($openCount == $closeCount) {
    printf("Скобки расставлены верно\n");
}
else {
    if ($openCount > $closeCount) {
        printf("Открывающих скобок больше чем закрывающих на %s.", $openCount - $closeCount);
    }
    else {
        $count = 0;
        for ($i=0; $i <= strlen($str)-1; $i++) {
            if ($str[$i] == ')') {
                $index = $i;
                $count += 1;
                if (calcTagCount(substr($str,0,$index)) < $count) {
                    print_r("Позиция первой лишней закрывающей скобки $index");
                    break;
                }
            }    
            
                
            }

    }

}


