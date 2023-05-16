<?php 

function task1(){
    for ($i = 1; $i <= 9; $i++){
        $str .= $i;
    }
    return $str;
}

function task2(){
    for ($i = 9; $i >= 1; $i--){
        $str .= $i;
    }
    return $str;
}


function task3(){
    for ($i = 1; $i <= 9; $i++){
        $str .= '-'.$i;
    }
    return $str.'-';
}

function task4(){
    for ($i = 1; $i <= 20; $i++){
        echo str_repeat("x", $i) . '<br>';
    }
}

function task5(){
    for ($i = 1; $i <= 9; $i++){
        for ($j = 1; $j <= $i; $j++){
            echo $i;
        } 
        echo '<br>';
    }
}

function task6(){
    for ($i = 1; $i <= 5; $i++){
        echo str_repeat("x", $i*2) . '<br>';
    }
}


task6();

