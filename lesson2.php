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
function task13($hours, $day, $month){
    $hours = 60 * 60;
    $day = $hours * 24;
    $month = $day * 30;
}

function task14(){
    return date('h:i:s');
}

function task15($num){
    return $num**2;
}

function task16(){
    $var = 47;
    $var += 7;
    $var -= 18;
    $var *= 10;
    $var /= 20;
    echo $var;
}

function task17(){
    $text = 'Я';
    $text .= ' хочу';
    $text .= ' знать';
    $text .= ' PHP!';
    echo $text;
}
function task18(){
    $var = 10;
    $var++;
    $var++;
    $var--;
    echo $var;
}

function task19(){
    $var = 10;
    $var += 7;
    $var += 1;
    $var -= 1;
    $var += 12;
    $var *= 7;
    $var -= 15;
    echo $var;
}