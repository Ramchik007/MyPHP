<?php
/*6.8. Дано число n. Из чисел 1, 4, 9, 16, 25, ... напечатать те, которые не превыша-
ют n.
(hint: given numbers are squares. arrays are allowed)
*/

$numbers = [];
$lessNumbers = [];
$n = 600;

for ($i=1; $i <= $n; $i++) {
    $numbers[$i] = $i**2;
}

$i = 1;
foreach ($numbers as $value) {
    if ($value <= $n) {
        $lessNumbers[$i] = $value;
        $i+=1;
    }
}


foreach ($lessNumbers as $key => $value) {
    if ($key != count($lessNumbers)) {
        printf("$value, " );
    }
    else {
        printf("$value.");
    }

}

