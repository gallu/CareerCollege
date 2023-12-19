<?php  // date3.php

function dateFormatChange($date_string) {
    var_dump($date_string);
    $t = strtotime($date_string);
    var_dump($t);
    $s = date(DATE_ATOM, $t);
    var_dump($s);
    echo "\n";
}

dateFormatChange("2023/10/21 09:10:11");
dateFormatChange("June 27th, 2019");
dateFormatChange("27th June 2019");
dateFormatChange("06/27/2019");
dateFormatChange("27/06/2019"); // これはダメ

dateFormatChange("21/Oct/2023:09:44:31 +0900");
dateFormatChange("Oct 21 09:45:52");
