<?php

$length = 10;
$height = 12;
$array = [[]];
$num = 1;


function printArray($array, $length = 10, $height = 12): void
{
    for ($i = 0; $i < $height; $i += 1) {
        for ($j = 0; $j < $length; $j += 1) {
            printf(sprintf("%'  4d ",$array[$i][$j] . " "));

        }
        printf("\n");

    }
    printf("\n");

}


//generation a
for ($i = 0; $i < $height; $i += 1) {
    for ($j = 0; $j < $length; $j += 1) {
        $array[$i][$j] = $num;
        $num++;
    }
}

//print a
echo "а\n";
printArray($array);


//generation б
unset($array);
unset($num);

$array = [[]];
$num = 1;
for ($i = 0; $i < $height; $i += 1) {
    for ($j = 0; $j < $length; $j += 1) {
        if ($j == 0) {
            $array[$i][$j] = $num;
            $num++;
        } else {
            $array[$i][$j] = $array[$i][$j - 1] + 12;
        }


    }
}

//print б
echo "б\n";
printArray($array);

//generation в
unset($array);
unset($num);

$array = [[]];
$num = 10;
for ($i = 0; $i < $height; $i += 1) {
    for ($j = 0; $j < $length; $j += 1) {
        if ($j == 0) {
            $array[$i][$j] = $num;
            $num += 10;
        } else {
            $array[$i][$j] = $array[$i][$j - 1] - 1;
        }


    }
}

//print в
echo "в\n";
printArray($array);


//generation г
unset($array);
unset($num);

$array = [[]];
$num = 12;
for ($i = 0; $i < $height; $i += 1) {
    for ($j = 0; $j < $length; $j += 1) {
        if ($j == 0) {
            $array[$i][$j] = $num;
            $num -= 1;
        } else {
            $array[$i][$j] = $array[$i][$j - 1] + 12;
        }


    }
}

//print г
echo "г\n";
printArray($array);


//generation д
unset($array);
unset($num);
$height = 10;
$length =12;
$array = [[]];
$num = 1;
$flag = 1;
for ($i = 0; $i < $height; $i += 1) {
    if($flag ==1) {
        for ($j = 0; $j < $length; $j += 1) {
            $array[$i][$j] = $num;
            $num++;
            $flag = 0;
        }
    }
    else {
        for ($j = $length -1; $j >=0; $j--) {
            $array[$i][$j] = $num;
            $num++;
            $flag =1;

        }
    }
}
//print д
echo "д\n";
printArray($array, $length = 12, $height = 10);

//generation е
unset($array);
unset($num);

$length= 10;
$height =12;

$num = 1;
$flag = 1;


$array = [[]];
$j=0;
$k=0;

while ($k < 5) {
    for ($i = 0; $i < $height; $i += 1) {

        $array[$i][$j] = $num;
        $num++;


    }
    $j++;


    for ($i = $height - 1; $i >= 0; $i--) {
        $array[$i][$j] = $num;
        $num++;



    }
    $j++;
    $k++;
}


//print е
echo "е\n";
printArray($array, $length = 10, $height = 12);



//generation ж
unset($array);
unset($num);


$array = [[]];
$num = 1;
$length = 10;
$height = 12;
for ($i = $height-1; $i >= 0; $i -= 1) {
    for ($j = 0; $j < $length; $j += 1) {
        $array[$i][$j] = $num;
        $num++;

    }
}
//print ж
echo "ж\n";
printArray($array, $length = 10, $height = 12);



//generation з
$length= 10;
$height =12;

$num = 1;
$flag = 1;

$array = [[]];
$j = $length -1;

while($j>=0){
    for ($i = 0; $i < $height; $i += 1) {
        {
            $array[$i][$j] = $num;
            $num++;

        }

    }
    $j--;
}


//print з
echo "з\n";
printArray($array, $length = 10, $height = 12);




//generation и
$length= 10;
$height =12;

$num = 1;
$flag = 1;

$array = [[]];

for ($i = $height-1; $i >= 0; $i -= 1) {
    for ($j = $length-1; $j >= 0; $j -= 1) {
        $array[$i][$j] = $num;
        $num++;

    }
}

//print и
echo "и\n";
printArray($array, $length = 10, $height = 12);





//generation к
$length= 10;
$height =12;

$num = 1;
$flag = 1;

$array = [[]];
$j = $length - 1;
while ($j>=0) {
    for ($i = $height-1; $i >= 0; $i -= 1) {
        $array[$i][$j] = $num;
        $num++;

    }
    $j--;
}

//print к
echo "к\n";
printArray($array, $length = 10, $height = 12);



//generation л
$array = [[]];
$j = $length - 1;
$length= 10;
$height =12;
$num = 1;
$flag = 1;

for ($i = $height-1; $i >= 0; $i -= 1) {
    if ($flag == 1) {
        for ($j = 0; $j < $length; $j++) {
            $array[$i][$j] = $num;
            $num++;

        }
        $flag = 0;
    }
    else {
        for ($j = $length -1; $j >= 0; $j--) {
            $array[$i][$j] = $num;
            $num++;

        }
        $flag =1;
    }

}

//print л
echo "л\n";
printArray($array, $length = 10, $height = 12);



//generation м
$length= 10;
$height =12;

$num = 1;
$flag = 1;


$array = [[]];
$j = $length - 1;

for ($i = 0; $i < $height; $i += 1) {
    if ($flag == 0) {
        for ($j = 0; $j < $length; $j++) {
            $array[$i][$j] = $num;
            $num++;

        }
        $flag = 1;
    }
    else {
        for ($j = $length -1; $j >= 0; $j--) {
            $array[$i][$j] = $num;
            $num++;

        }
        $flag =0;
    }


}

//print м
echo "м\n";
printArray($array, $length = 10, $height = 12);


//generation н
$length= 10;
$height =12;

$num = 1;
$flag = 1;


$array = [[]];
$j = $length - 1;

while($j >=0) {
    if($flag == 1) {
        for ($i = 0; $i < $height; $i += 1) {
            $array[$i][$j] = $num;
            $num++;

        }
        $flag = 0;

    }
    else {
        for ($i = $height -1; $i >= 0; $i--) {
            $array[$i][$j] = $num;
            $num++;


        }
        $flag = 1;
    }
    $j--;


}

//print н
echo "н\n";
printArray($array, $length = 10, $height = 12);




//generation о
$length= 10;
$height =12;

$num = 1;
$flag = 0;


$array = [[]];
$j = 0;

while($j < $length) {
    if($flag == 1) {
        for ($i = 0; $i < $height; $i += 1) {
            $array[$i][$j] = $num;
            $num++;

        }
        $flag = 0;

    }
    else {
        for ($i = $height -1; $i >= 0; $i--) {
            $array[$i][$j] = $num;
            $num++;


        }
        $flag = 1;
    }
    $j++;


}


//print о
echo "о\n";
printArray($array, $length = 10, $height = 12);


//generation п
$length= 10;
$height =12;

$num = 1;
$flag = 0;

$array = [[]];

for ($i = $height-1; $i >= 0; $i -=1) {

    if($flag ==1) {
        for ($j = 0; $j < $length; $j++) {
            $array[$i][$j] = $num;
            $num++;

        }
        $flag = 0;

    }   else {
        for ($j = $length-1; $j >= 0; $j-=1)
        {
            $array[$i][$j] = $num;
            $num++;
        }

        $flag = 1;
    }

}



//print п
echo "п\n";
printArray($array, $length = 10, $height = 12);



//generation р
$length= 10;
$height =12;

$num = 1;
$flag = 0;

$array = [[]];
$j = $length - 1;

while($j >=0) {
    if($flag == 1) {
        for ($i = 0; $i < $height; $i += 1) {
            $array[$i][$j] = $num;
            $num++;

        }
        $flag = 0;

    }
    else {
        for ($i = $height -1; $i >= 0; $i--) {
            $array[$i][$j] = $num;
            $num++;


        }
        $flag = 1;
    }
    $j--;


}


//print р
echo "р\n";
printArray($array, $length = 10, $height = 12);
