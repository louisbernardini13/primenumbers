<?php

function prime_numbers($n){

    $flag = 1;
    $i = 2;

    if ($n <= 1) {
        return false;
    }
    for (; $i < ($n/2)+1;) {
        if ($n % $i == 0) {
            $flag = 0;
        }
        $i = $i + 1; 
    }
    if ($flag == 0){
        return false;
    }
    return true;
    }
    var_dump(prime_numbers(11));



















?>