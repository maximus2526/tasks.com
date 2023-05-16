<?php 

function task1(array $nums){
    if(in_array(5, $nums))
        echo 'Yes';
    else    
        echo 'No';
}

function task2(){
    foreach( range(2,30) as $num){
        if ((31 % $num) == 0) {
            return 'false';
        }
    }
    return 'true';
}


function task3(array $nums){
    for ($i = 0; $i < count($nums); $i++){
        if($nums[$i] == $nums[$i+1]){
            return 'Yes';
        }
    }
    return 'No';

}


echo task3([2,3,4,5,6,7,8]);