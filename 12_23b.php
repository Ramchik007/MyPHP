<?php


$length = 7;
$array2 = [[]];

for ($i = 0; $i < $length; $i += 1) {
    for ($j = 0; $j < $length; $j += 1) {
        $array2[$i][$j] = 0;
    }

}

$j = 0;
for ($i = 0; $i < $length; $i += 1) {
    $array2[$i][$j] = 1;
    $j += 1;
}

$j = $length - 1;
for ($i = 0; $i < $length; $i += 1) {
    $array2[$i][$j] = 1;
    $j -= 1;
}

//
for ($i = 0; $i < $length; $i += 1) {
    for ($j = 0; $j < $length; $j += 1) {
        if($i == intdiv($length,2) || $j == intdiv($length,2) ) {
            $array2[$i][$j] = 1;
        }

    }

}


for ($i = 0; $i < $length; $i += 1) {
    for ($j = 0; $j < $length; $j += 1) {
        printf("%s ", $array2[$i][$j]);
    }
    echo "\n";

}



$count =0;
for($i =0;$i < 1; $i +=1) {
    for ($j = 0; $j < $length; $j += 1) {
        if ($array2[$i][$j] == 1) {
            $count +=1;
        }
    }

}

printf($count);