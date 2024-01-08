<?php
/*6.8. Дано число n. Из чисел 1, 4, 9, 16, 25, ... напечатать те, которые не превыша-
ют n.
(hint: given numbers are squares. arrays are allowed)
*/

$numbers = [];
$resultArray = [];
$n = 500;
$i=1;
for ($i=1; $i <= $n; $i++) {
    $numbers[$i] = $i**2;
}

foreach ($numbers as $value) {
    if ($value <= $n) {
        $resultArray[$i] = $value;
        $i+=1;    
    }
}


//print_r($numbers);
print_r($resultArray);
