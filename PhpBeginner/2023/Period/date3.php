<?php  // date3.php

function changeDateFormat($s) {
    var_dump($s);
    $t = strtotime($s);
    var_dump($t);
    $ds = date(DATE_ATOM, $t);
    var_dump($ds);
    echo "\n";
}

changeDateFormat("2023-10-17 11:22:33+0900");
changeDateFormat("June 27th, 2019");
changeDateFormat("27th June 2019");
changeDateFormat("17/Oct/2023:13:56:04 +0900");
changeDateFormat("Oct 17 13:56:04");
