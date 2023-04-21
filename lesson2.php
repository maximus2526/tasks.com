<?php
// Работа с переменными
function task1(){
    $a = 3;
    echo $a;
}

function task2(){
    $a = 10;
    $b = 2;
    echo $a + $b;
}

function task3(){
    $c=15;
    $d=2;
    $result = $c + $d;
    echo $result;
}

function task4(){
    $a=10;
    $b=2;
    $c=5;
    echo $a + $b + $c;
}

function task5(){
    $a = 17; $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo $result;
}

// Работа со строками

function task6(){
    $text = "Привет, Мир!";
    echo $text;
}

function task7(){
    $text1='Привет, ';
    $text2 = 'Мир!';
    echo $text1.$text2;
}

function task8(){
    $name = 'Max';
    echo 'Привет, ' . $name . '!';
}

function task9(){
    $age = 22;
    echo "Мне {$age} лет!";
}

// Обращение к символам строки

function task10(){
    $text = 'abcde';
    echo "$text[0], $text[2], $text[4]";
}

function task11($str){
    $str[0] = '!';
    echo $str;
}

function task12(){
    $num = '12345';
    for ($i=0; $i < strlen($num); $i++) { 
        $res += $num[$i];
    }
    echo $res;
}

// Практика
function task13(){

    

}
