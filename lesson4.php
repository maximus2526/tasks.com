<?php
function task1($a){
 if($a == 0)
    return 'True';
 else
    return 'False';
}


function task2($a){
    if($a > 0)
        return 'True';
    else
        return 'False';
}


function task3($a){
    if($a < 0)
        return 'True';
    else
        return 'False';
}


function task4($a){
    if($a >= 0)
        return 'True';
    else
        return 'False';
}


function task5($a){
    if($a <= 0)
        return 'True';
    else
        return 'False';
}

function task6($a){
    if($a != 0)
        return 'True';
    else
        return 'False';
}

function task7($a){
    if($a == 'Test')
        return 'True';
    else
        return 'False';
}

function task8($a){
    if($a === 1)
        return 'True';
    else
        return 'False';
}

function task9($a){
    if (empty($a))
        return true;
    else    
        return false;
}

function task10($a){
    if (!empty($a))
        return true;
    else    
        return false;
}

function task11($a){
    return isset($a) ? 'true' : 'false';
}


function task12($a){
    return !isset($a) ? 'true' : 'false';
}


function task13($var){
    return $var === true ? 'True' : 'False';
}


function task14($var){
    return $var != true ? 'True' : 'False';
}



function task15($a){
    if ($a + 0 and $a < 5)
        return 'True';
    else    
        return 'False';
}

function task16($a){
    if ($a = 0 || $a = 2)
        return $a + 7;
    else    
        return $a / 10;
}

function task17($a, $b){
    if ($a <= 1 and $b >= 3)
        return $a + $b;
    else    
        return $a - $b;
}

function task18($a, $b){
    if (($a > 2 and $a < 11) || ($b >= 6 and $b < 14))
        return 'true';
    else 
        return 'fasle';
}


function task19($num){
    switch($num) {
        case 1:
            return 'winter';
        case 2:
            return 'summer';
        case 3: 
            return 'spring';
        case 4: 
            return 'autumn';
        default:
            return "error";
    }
}


function task20($day){
    if ($day >= 0 and $day <= 10)
        return 1;
    elseif ( $day > 10 )
        return 2;
    elseif ( $day > 20 and $day <= 31 )
        return 3;
    else 
        return 'Error';
}


function task21($month){
    if($month >= 1 and $month <= 2 or $month == 12) {
        return 'winter';
    } elseif($month >= 3 and $month <= 5) {
        return 'spring';
    } elseif($month >= 6 and $month <= 8) {
        return 'summer';
    } elseif($month >= 9 and $month <= 11) {
        return 'autumn';
    } else {
        return 'error';
    }
}


function task22($year) {
    if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

function task23(string $str){
    return $str[0] == 'a' ? 'Yes': 'No';
}

function task24(string $nums){
    return ($nums[0] == '1' or $nums[0] == '2' or $nums[0] == '3') ? 'Yes': 'No';
}

function task25(string $nums){
    return $nums[0] + $nums[1] + $nums[2];

}

function task26(string $nums){
   return (($nums[0] + $nums[1] + $nums[2]) == ($nums[3] + $nums[4] + $nums[5])) ? 'Yes':'No';

}