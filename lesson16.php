<?php 

function task1(){
    for ($i = 1; $i <= 20; $i++){
        $arr[] = str_repeat("x", $i) . '<br>';
    }
    return $arr; 
}

function task2($value, $count){
    $result = array();
    for ($i = 0; $i < $count; $i++) {
        $result[] = $value;
    }
    return $result;
}


function task3($value, $count){
    $result = array();
    for ($i = 0; $i < $count; $i++)
        $result[] = $value;
    return $result;
}


function task4(){
    $nums = [1,2,3,4,5];
    $temp = 0;
    for($i = 0; $i < count($nums); $i++){
        $temp += $nums[$i];
        if ($temp == 10){
            return $i+1;
        }
    }
}
function task5(){
    $nums =  [[1, 2, 3], [4, 5], [6]];
    foreach ($nums as $sub_nums){
        $result += array_sum($sub_nums);
    }
    return $result;
}

function task6(){
    $nums =  [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
    foreach ($nums as $sub_nums){
        foreach ($sub_nums as $sub_sub_nums){
            $result += array_sum($sub_sub_nums);
        }
    
    }
    return $result;
}

function task7(){
    return array( array_chunk(range(1 , 9), 3 ));
}

print_r(task7());