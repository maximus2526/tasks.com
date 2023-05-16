<?php

function task1(string $string){
    $transliterationTable = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
        'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I',
        'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
        'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'Ts', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '',
        'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya'
    );
    $transliteratedString = strtr($string, $transliterationTable);
    return $transliteratedString;
}


function task2($number, $form1, $form2, $form5){
    $number = abs($number) % 100; 
    $remainder = $number % 10;

    if ($number >= 11 && $number <= 19) {
        return $form5;
    } elseif ($remainder === 1) {
        return $form1;
    } elseif ($remainder >= 2 && $remainder <= 4) {
        return $form2;
    } else {
        return $form5;
    }
}

function task3(){
    $ticket = str_split("343333");
    $separated = array_chunk($ticket, 2);
    if (array_sum($separated[0]) == array_sum($separated[1])){
        return 'You win!';
    }
    return 'You lose!';
}

function getDivisors ($num){
    $result = array();

    foreach(range(1, 10) as $digit){
        if (($num % $digit) == 0 ){
            $result[] = $digit;
        }
    }
    return $result;
}
function task4(){ // Невірно, дороби
    $result = array();
    for ($i = 1; $i < 10000; $i++)
        $array_sum1 = array_sum(getDivisors($i));
        for ($j = 1; $j < 10000; $j++)
            $array_sum2 = array_sum(getDivisors($j));
            if($array_sum1 = $array_sum2){
                $result[] = $i . ' and ' . $j;
            }
    return $result;
}

print_r(task4());