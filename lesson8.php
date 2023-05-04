<?php 
// Функції роботи з масивами.
function task1(){
    return count([1, 2, 3, 4, 5]);
}
function task2(){
    $arr = [1, 2, 3, 4, 5, 8];
    return $arr[count($arr)-1];
}
function task3(){
    $arr = [1, 2, 3, 4, 5, 8];
    return in_array('3', $arr);
}

function task4(){
    $arr = [1, 2, 3, 4, 5, 8];
    return array_sum($arr);
}
function task5(){
    $arr = [1, 2, 3, 4, 5, 8];
    return array_product($arr);
}

function task6(){
    $arr = [1, 2, 3, 4, 5, 8];
    return array_sum($arr)/count($arr);
}
function task7(){
    return range(1, 100);
}
function task8(){
    return range('a', 'z');
}
function task9(){
    return implode('-', range(1, 9));
}

function task10(){
    return array_sum(range(1, 100));
}

function task11(){
    return array_product(range(1, 10));
}
function task12(){
    return array_merge([1, 2, 3], ['a', 'b', 'c']);
}
function task13(){
    return array_slice([1, 2, 3, 4, 5], 1, 3);
}
function task14(){
    $arr = [1, 2, 3, 4, 5];
    array_splice($arr, 1, 1);
    array_splice($arr, 1, 0, 4);
    return $arr;
}

print_r(task14());