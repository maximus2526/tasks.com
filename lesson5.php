<?php
// Задачи на циклы foreach, while, for в PHP

function task1(){
    $arr = ['html', 'css', 'php', 'js', 'jq'];
	foreach ($arr as $elem) {
		echo $elem.'<br>'; 
	}
}
function task2(){
    $arr = [1, 2, 3, 4, 5];
    $result = 0;
    foreach ($arr as $elem){
        $result += $elem;
    }
    return $result;
}
function task3(){
    $arr = [1, 2, 3, 4, 5];
    $result = 0;
    foreach ($arr as $elem){
        $result += $elem*$elem;
    }
    return $result;
}
function task4(){
    $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
    foreach($arr as $key=>$value){
        echo $key . ' ' . $value . '<br>';
    }
}

function task5(){
    $arr = [ 'Коля' => '200', 'Вася' => '300', 'Петя' => '400'];
    foreach($arr as $key=>$value){
        echo $key . ' - зарплата ' . $value . ' долларов<br>';
    }
}

function task6(){
    for ($i = 1;$i <= 100;$i++){
        echo $i;
    }
}

function task7(){
    for ($i = 11;$i <= 33;$i++){
        echo $i;
    }
}

function task8(){
    $i = 0;
    while($i <=100){
        echo $i;
        $i++;
    }
}

function task9(){
    for ($i = 1;$i <= 100;$i++){
        $i += $i;
    }
    return $i;  
}   
function task10(){
    $arr = [2, 5, 9, 15, 0, 4];
    foreach ($arr as $elem){
        if ($elem > 3 and $elem < 10){
            echo $elem;
        }
    }
}
function task11(){
    $arr = [2, -5, 9, -15, 0, -4];
    foreach ($arr as $elem){
        if ($elem > 0){
            echo $elem;
        }
    }
}
function task12(){
    $arr = [1, 2, 5, 9, 4, 13, 4, 10];
    foreach ($arr as $elem){
        if ($elem == 4){
            echo "Yes";
        } 
    }
}
function task13(){
    $arr = ['10', '20', '30', '50', '235', '3000'];
    foreach ($arr as $elem){
        if ($elem[1] == 1 or $elem[1] == 2 or $elem[1] == 5){
            echo $elem;
        }
    }
}   
function task14(){
    $string = '-';
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    foreach($arr as $elem){
        $string .= $elem. '-';
    }
    echo $string;
}

function task15(){
    $arr = ['понеділок','вівторок','середа','четвер','пятниця', 'субота', 'неділя'];
    foreach($arr as $elem){
        if ($elem =='субота' or $elem == 'неділя')
            echo '<b>' . $elem . '</b> ';
        else 
            echo $elem . ' ';
    }
}

function task16(){
    $arr = ['понеділок','вівторок','середа','четвер','пятниця', 'субота', 'неділя'];
    $day = 'четвер';
    foreach($arr as $elem){
        if ($elem == $day){
            echo '<em>' . $elem . '</em> ';
        } else {
            echo $elem . ' ';
        }
    }
}

function task17(){
    $arr = array();
    for ($i = 1; $i <= 100; $i++){
        $arr[] = $i;
    }
    return $arr;
}

function task18(){
    $arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
    foreach($arr as $key=>$value){
        $en[] = $key;
        $ua[] = $value;
    }
    var_dump( $en );
    var_dump( $ua );
}   

function task19(){
    $num=1000;
    $iterations = 0;
    while($num >= 50){

        $num /= 2;
        $iterations++;
        echo $iterations. ' ' . $num . "</br> ";
        if ($num < 0) {
            break;
        }
        
    }
    $num = 1000;
    $iterations = 0;

    for (; $num >= 50; $iterations++) {
        $num /= 2;
        echo $num . "</br> ";
    }

    echo "Количество итераций: " . $iterations;

}
