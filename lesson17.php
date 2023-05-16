<?php 

function task1($num){
    if($num > 0 and $num < 10 )
        return true;
    return false;
}


function task2(){
    $nums = range(1, 10);
    $result = array();
    foreach($nums as $num){
        if( task1($num)){
            $result[] = $num;
        }
    }
}

function task3($num){
    $str = (string)$num;
    $digits = str_split($str);
    return array_sum($digits);
}

function task4(){
    for ($i = 1; $i < 2023; $i++){
        if(task3($i) == 13){
            echo $i . '<br>';
        }
    }
}

function task5($num){
    if ($num % 2 == 0)
        return true;
    return false;
}
function task6(){
    foreach (range(1, 100) as $num){
        if(task5($num)){
            echo $num . '<br>';
        }
    }
}
function task7($num){
    $result = array();

    foreach(range(1, 10) as $digit){
        if (($num % $digit) == 0 ){
            $result[] = $digit;
        }
    }
    return $result;
}


function task8($num1, $num2){
    $div1 = task7($num1);
    $div2 = task7($num2);
    return array_intersect($div1, $div2);
}

print_r(task8(25, 13));