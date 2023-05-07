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


function task15(){
    $arr = [1, 2, 3, 4, 5];
    array_splice($arr, -1, 0, [2, 3, 4] );
    return $arr;
}

function task16(){
    $arr = [1, 2, 3, 4, 5];
    array_splice($arr, 2, 0, ['a', 'b', 'c'] );
    return $arr;
}


function task17(){
    $arr = [1, 2, 3, 4, 5];
    array_splice($arr, 1, 0, ['a', 'b'] );
    array_splice($arr, 5, 0, ['c'] );
    array_splice($arr, -1, 0, ['e'] );
    return $arr;
}


function task18(){
    $arr = [
        'a'=>1,
        'b'=>2, 
        'c'=>3
    ];
    $keys = array_keys($arr);
    $values = array_values($arr);


    return implode(', ',$keys) . "   " .implode(', ',$values) ;
}


function task19(){
    return array_combine( ['a', 'b', 'c'], [1, 2, 3]); // Робить асоціативний масив 
}
function task20(){
   return array_flip(['a'=>1, 'b'=>2, 'c'=>3]);
}
function task21(){
    return array_reverse([1, 2, 3, 4, 5]);
 }

function task22(){
    return array_search('-', ['a', '-', 'b', '-', 'c', '-', 'd']);
}

function task23(){
    $arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
    return array_splice($arr, array_search('-', ['a', '-', 'b', '-', 'c', '-', 'd'])+1);
}
function task24(){
    $arr = ['a', 'b', 'c', 'd', 'e'];
    return array_replace($arr, [0 => '!']);
}   

function task25(){
    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    ksort($arr);
    return $arr;
}   

function task26(){
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    return array_rand($arr);
}  

function task27(){
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    return $arr[array_rand($arr)];
}  

function task28(){
    $arr = range(1, 10);
    shuffle($arr);
    return $arr;
}  
function task29(){
    $arr = range(1, 25);
    shuffle($arr);
    return $arr;
}  

function task30(){
    $arr = range(1, 25);
    shuffle($arr);
    return $arr;
}  
function task31(){
    $arr = range('a', 'f');
    shuffle($arr);
    return $arr;
}  

function task32(){
    return array_unique(['a', 'b', 'c', 'b', 'a']);
}  

function task33(){
    $arr = ['a', 'b', 'c'];
    array_push($arr, '-', '-', '-');
    return $arr;
}  

function task34(){
    $arr = [1, 2, 3, 4, 5, 6, 7, 8];
    array_shift($arr);
	array_pop($arr);
    return $arr;
}  

function task35(){
    $arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$str = '';
	while (count($arr) > 0) {
		$str .= array_shift($arr);
		$str .= array_pop($arr);
	}

	echo $str;
}  
function task36(){
    $arr = ['a', 'b', 'c'];
    array_push($arr, '-', '-', '-');
    return $arr;
}  

function task37(){
    return array_fill(0, 10, 'x' );
}  

function task38(){
    $arr = range(1, 20);
    return array_chunk( $arr, 5);
}  
function task39(){
    $arr = ['a', 'b', 'c', 'b', 'a'];
    return array_count_values($arr);
}  

function task40(){
    $arr = [1, 2, 3, 4, 5];
    return array_map('sqrt', $arr);
}  

function task41(){
    $arr = ['<b>php</b>', '<i>html</i>'];
    return array_map('strip_tags', $arr);
}  

function task42(){
    $arr = [' a ', ' b ', ' c '];
    return array_map('trim', $arr);
}  
function task43(){
    return array_intersect([1, 2, 3, 4, 5], [3, 4, 5, 6, 7]);
}  
function task44(){
    return array_diff([1, 2, 3, 4, 5], [3, 4, 5, 6, 7]);
}  

function task45(){
    return array_sum(str_split('1234567890'));
}  

function task46(){
    return array_combine(range(1, 26), range('a', 'z'));
}  

function task47(){
    return array_chunk(range(1, 9), 3);
}  

function task48(){
    $arr = array_unique([1, 2, 4, 5, 5]);
    array_pop($arr);
    return max($arr);

}  

print_r(task48());