<?php
/*
 Определить результат выполнения следующих рекурсивных процедур при
n 5 :
in 10.51 first, create txt file with class’s name and suffix ‘*ExpectedOutputs.txt’ and write your expected outputs, only then implement and create ‘*ActualOutputs.txt’ to compare results.
In the 3rd task there is an error in formatting: treat 2nd output as inside the ‘if’ block.
 */

$text = "a)54321\nб)12345\nв)5432112345";
$filename = __DIR__.'/ExpectedOutputs.txt';

$fh = fopen($filename,'w');
fwrite($fh, $text);
fclose($fh);
