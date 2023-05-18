<?php 
function task1($nums){
    for($i = 0; $i < count($nums);$i++ ){
        if ($nums[$i] > $nums[$i+1]){
            return false;
        }
    }
}

function task2(){
    $nums = [1, '', 2, 3, '', 5];
    foreach($nums as $num) {
        if ($num == ''){
            array_unshift($nums, $num);
        }
    }
    return $nums;
}
    
function task3() {
    $arr = [
        [2, 1, 4, 3, 5],
        [3, 5, 2, 4, 1],
        [4, 3, 1, 5, 2],
    ];

    foreach ($arr as &$elem) {
        $sorted = false;
        while (!$sorted) {
            $sorted = true;
            for ($i = 0; $i < count($elem) - 1; $i++) {
                if ($elem[$i] > $elem[$i + 1]) {
                    $temp = $elem[$i];
                    $elem[$i] = $elem[$i + 1];
                    $elem[$i + 1] = $temp;
                    $sorted = false;
                }
            }
        }
    }

    return $arr;
}
    

print_r(task3());