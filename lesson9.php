<?php
// Практика на комбинации функций

function task1(array $arr){
    return array_sum($arr)/count($arr);
}

function task2(){
    return array_sum(range(1, 100));
}

function task3(){
    return implode('<br>', range(1, 100));
}

function task4(){
    return array_fill(0, 10, 'x');
}

function task5(){
    $arr = range(1, 10);
    return shuffle($arr);
}
function task6($num){
	$arr = range(1, $num);
	return array_product($arr);
}
function task7($num){
	$arr = range(1, $num);
	return array_sum($arr);
}

function task8($string){
	return substr_replace($string, strtoupper(substr($string, -1)), -1);
}

function task9($arr){
	return array_map('sqrt', $arr);
}

function task10($arr){
    $keys = range('a', 'z');
	$elems = range(1, 26);
	return array_combine($keys, $elems);
}

function task11($string){
    $arr = str_split($string, 2);
	return array_sum($arr);
}


var_dump($string[-1]);