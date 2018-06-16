<?php  // dice.php

function dice($s) {
    //
    $s = strtoupper($s);
    list($dice_num, $dice_type) = explode('D', $s);
    //
    $ret = 0;
    for($i = 0; $i < $dice_num; ++$i) {
        $ret += mt_rand(1, $dice_type);
    }

    return $ret;
}
