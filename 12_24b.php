<?php
$array = [[]];
$size = 6;
$num = 1;

for ($i = 0; $i < $size; $i += 1) {
    for ($j= 0;$j< $size;$j+=1) {
        if ($i==0) {
            $array[$i][$j] = $num;
            $num +=1;

        }
        else {
            if($array[$i-1][$j] == 6){
                $array[$i][$j]=1;
            }
            else {
                $array[$i][$j] = $array[$i-1][$j] + 1;
            }

        }


    }
}

for ($i= 0;$i<$size;$i++) {
    for ($j= 0;$j< $size;$j+= 1) {
        printf($array[$i][$j]);
    }
    echo "\n";
}

