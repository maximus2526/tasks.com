<?php 

function task1($num){
    return $num*$num;
}
function task2($num1, $num2){
    return $num1+$num2;
}
function task3($num1, $num2, $num3){
    return ($num1-$num2)/$num3;
}
function task4($num){
    switch($num){
        case 1: 
            echo 'Понедельник';
        case 2:
            echo 'Вторник';
        case 3:
            echo 'Среда';
        case 4: 
            echo 'Четверг';
        case 5:
            echo 'Пятница';
        case 6:
            echo 'Суббота';
        case 7:
            echo 'Воскресенье';
    }
}
