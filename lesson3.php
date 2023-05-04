<?php
// Основи роботи з масивами PHP
function task1(){
    $arr=['a', 'b', 'c'];
    var_dump($arr);
}

function task2(){
    $arr=['a', 'b', 'c'];
    echo implode('/', $arr);
}

function task3(){
    $arr=['a', 'b', 'c', 'd'];
    echo $arr[0].'+'.$arr[1].', '.$arr[2].'+'.$arr[3];
}

function task4(){
    $arr=[2, 5, 3, 9];
    echo ($arr[0]*$arr[1]) + ($arr[1]*$arr[2]) + ($arr[2]*$arr[3]);
}

function task5(){
    $arr = array();
    $arr[] = 1;
    $arr[] = 2;
    $arr[] = 3;
    $arr[] = 4;
    $arr[] = 5;
}

function task6(){
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    return $arr['c'];
}

function task7(){
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    foreach ($arr as $value)
        $result += $value;
    return $result;
}

function task8(){
    $arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
    return "Петя:".$arr["Петя"].' '.'Коля'.$arr['Коля'];
}

function task9(){
    $arr = [
        1 =>'monday',
        2 =>'tuesday',
        3 =>'wednesday',
        4 =>'thursday',
        5 =>'friday',
        6 =>'saturday',
        7 =>'sunday',
    ];
    echo $arr[4];
}

function task10($day){
    $arr = [
        1 =>'monday',
        2 =>'tuesday',
        3 =>'wednesday',
        4 =>'thursday',
        5 =>'friday',
        6 =>'saturday',
        7 =>'sunday',
    ];
    echo $arr[$day];
}

function task11(){
    $arr = [
        'cms'=>['joomla', 'wordpress', 'drupal'],
        'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
    ];
    return $arr['cms'][0] . ', ' . $arr['cms'][2] . ', ' . $arr['colors']['green'] . ', ' . $arr['colors']['red'];
}

function task12(){
    $arr = [
        'ua' => [
            'понеділок',
            'вівторок',
            'середа',
            'четвер',
            'пятниця',
            'субота',
            'неділя',
        ],
        'en' => [
            'monday',
            'tuesday',
            'wednesday',
            'thursday',
            'friday',
            'saturday',
            'sun'    
        ]
        ];
        return $arr['ua'][0] .', '. $arr['ua'][1] .', '. $arr['ua'][2] .', '. $arr['en'][3] .', '. $arr['en'][4] .', '. $arr['en'][5];
}

function task13($lang, $day){
    $arr = [
        'ua' => ['понеділок','вівторок','середа','четвер','пятниця', 'субота', 'неділя',],
        'en' => ['monday', 'tuesday','wednesday', 'thursday', 'friday', 'saturday', 'sun',]
    ];
    return $arr[$lang][$day-1];
}

echo task13('ua', 3);