<?php 

function task1(){
    return strtoupper('php');
}

function task2(){
    return strtolower('PHP');
}

function task3(){
    return ucfirst('london');
}

function task4(){
    return lcfirst('London');
}

function task5(){
    return ucwords('london is the capital of great britain');
}

function task6(){
    return ucfirst(strtolower('LONDON'));
}

function task7(){
    return strlen('html css php');
}

function task8($password){
    if (strlen($password) > 5 or strlen($password) < 10){
        return 'Good';
    } else {
        return 'Bad';
    }
}

function task9(){
    $str = 'html css php';
    $word1 = substr($str, 0, 4); 
    $word2 = substr($str, 5, 3); 
    $word3 = substr($str, 9, 3); 

    echo $word1 . '<br>'; 
    echo $word2 . '<br>'; 
    echo $word3 . '<br>'; 
}

function task10($str){
    return substr($str, -3); 
}

function task11($str){
    if (substr($str, 0, 7) == 'http://'){
        return 'Yes!';
    } else 
        return 'No(';
}
function task12($str){
    if ((substr($str, 0, 7) == 'http://') or (substr($str, 0, 8) == 'https://') ){
        return 'Yes!';
    } else 
        return 'No(';
}


function task13($str){
    if (substr($str, -4) == '.png') {
        return 'Yes';
    } else {
        return 'No(';
    }
}

function task14($str){
    if ((substr($str, -4) == '.png') or (substr($str, -4) == '.jpg')) {
        return 'Yes';
    } else {
        return 'No(';
    }
}

function task15($str){
    if (strlen($str) > 5){
        echo substr($str, 0, 5);
    } else 
        echo $str;
}

function task16(){
    return  str_replace('.', '-', '31.12.2013' );
}
function task17($str){
    $str = str_replace(['a', 'b', 'c'], [1, 2, 3], $str);
    return $str;
}

function task18(){
    return str_replace([1,2,3,4,5,6,7,8,9,0], '', '1a2b3c4b5d6e7f8g9h0' );
}

function task19(){
   return strtr( 'abcbdefgh', ['a' => 1, 'b' => 2]);
}

function task20(){
    return substr_replace( 'abcbdefgh', '!!!', 3, 5  );
 }
 
function task21(){
    return strpos('abc abc abc', 'b');
}
function task22(){
    return strrpos('abc abc abc', 'b');
}

function task23(){
    return strpos('abc abc abc', 'b', 2);
}

function task24(){
    return strpos( 'aaa aaa aaa aaa aaa', ' ', 4);
}

function task25(){
    $str = 'Э321213231.. 21322311и';
    if (strpos($str, '..') !== false) {
        echo 'есть';
    } else {
        echo 'нет';
    }
}
function task26(){
    $str = 'http://example.com';
    if (strpos($str, 'http://') === 0) {
        echo 'да';
    } else {
        echo 'нет';
    }
}

function task27(){
    return explode(' ', 'html css php');
}

function task28(){
    return implode(' ', ['html', 'css', 'php'] );
}

function task29(){
    return implode('.', explode('-',  '2013-12-31'));
}

function task30(){
    return implode('.', explode('-',  '2013-12-31'));
}

function task31(){
    return str_split('1234567890', 2);
}

function task32(){
    return str_split('1234567890', 1);
}

function task33(){
    return implode('-', str_split('1234567890', 2));
}

function task34(){
    return rtrim('fdsafsda fdswaasdf sdffdsad   fdasdadafsffds    ');
}

function task35(){
    return trim( '/php/', '/');
}

function task36(){
    return strrev('123123');
}

function task37($str){
    if (strrev($str) == $str){
        return 'Polidrom';
    }
}

function task38(){
    return str_shuffle('123123');
}

function task39(){
    return substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 6);
}

function task40(){
    return number_format('12345678', 0 ,  ' ', ' ');
}

function task41(){
    $i = 0;
    while ($i<=9){
        echo str_repeat('x', $i) . '<br>';
        $i++;
    }
}

function task42(){
    $i = 0;
    while ($i<=9){
        echo str_repeat($i, $i) . '<br>';
        $i++;
    }
}

function task43(){
    return strip_tags( 'html, <b>php</b>, js');
}

function task44(){
    return strip_tags( '<br>html, <br><b>php</b>, <br><i>js</i>', '<b><i>');
}

function task45(){
    return htmlspecialchars( 'html, <b>php</b>, js');
}

function task46(){
    return ord('a') . ' ' . ord('b') . ' ' .  ord(' ');
}

function task48(){
    return chr(33);
}

function task49(){
    return chr(mt_rand(65, 90));
}
function task50(){
    $len = 10; 
    $str = ''; 

    while (strlen($str) < $len) {
        $charCode = rand(97, 122); 
        $char = chr($charCode); 
        $str .= $char; 
    }

    echo $str;
}
function task51(){
    $letter = 'A'; 

    $ascii_code = ord($letter); 

    if ($ascii_code >= 97 && $ascii_code <= 122) {
        echo 'loverCase';
    } elseif ($ascii_code >= 65 && $ascii_code <= 90) {
        echo 'UpperCase';
    }
}

function task52(){
    return strchr('ab-cd-ef', '-');
}

function task53(){
    return strrchr('ab-cd-ef', '-');
}

function task54(){
    return strstr('ab--cd--ef', '--');
}

function task55($str){
    $result = '';
    foreach (explode('_', $str) as $elem){
        $result .= ucfirst($elem);
    }
    return lcfirst($result);
}

function task56(){
    $arr = [23, 12, 13, 31, 21 ];
    foreach ($arr as $elem){
        if (strpos((string)$elem, '3') !== false ){
            echo $elem . '<br>';
        }
    }

}



echo task56();
