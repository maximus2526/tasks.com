<?php
// Задачі на математичні функції
function task1(){
    $a=10;
    $b=3;
    return $a%$b;
}
function task2(){
    $a=10;
    $b=3;
    if ($a%$b == 0)
        return 'Yes';
    else
        return 'No';
    
}
function task3(){
    return pow(2, 10);
}

function task4(){
    return sqrt(245);
}

function task5(){
   $arr =[4, 2, 5, 19, 13, 0, 10];
   $result = 0;
   foreach($arr as $elem){
        $result += $elem * $elem ;
   }
   return sqrt($result);
}

function task6(){
    $result = sqrt(245);
    return round($result, 10);
}

function task7(){
    $result['floor'] = floor(sqrt(587));
    $result['ceil'] = ceil(sqrt(587));
    var_dump($result);
}

function task8(){
    return min([4, -2, 5, 19, -130, 0, 10]) . " " . max([4, -2, 5, 19, -130, 0, 10]);
}

function task9(){
    return mt_rand(1, 100);
}

function task10(){
    $i = 0;
    while ( $i < 10){
        $result[] = mt_rand();
        $i++;
    }
    return $result;
}

function task11($a, $b){
    return abs($a - $b);
}

function task12(){
   $arr = [1, 2, -1, -2, 3, -3];
   foreach($arr as &$elem){
        $elem = abs($elem);
   }
   return $arr;
}


function task13(){
    $num = 30;
    for ($i = 1; $i <= $num; $i++)
        if (($num % $i) == 0){
            $result[] = $i;
        }
    return $result;
}

function task14(){
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    for($i = 0; $i <= count($arr); $i++){
        if (($arr[$i] + $arr[$i+1]) > 10){
            return $arr[$i] . " " . $arr[$i+1];
        }
        
    }
}

