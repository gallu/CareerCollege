<?php  // date4.php

$ds = [
    "16/Nov/2024:16:21:18 +0900",
    "2024-11-16T16:19:31+09:00",
    "2024-10-23T10:18:23.280538Z",
    "Nov 16 16:31:54",
    "June 27th, 2019",
    "27th June 2019",
    "6/27/2019",
    // "27/6/2019", // こいつはパース不能
];

foreach ($ds as $s) {
    echo "{$s} <br>\n";
    //
    $t = strtotime($s);
    echo "{$t} <br>\n";
    //
    $s = date(DATE_ATOM, $t);
    echo "{$s} <br>\n";

    echo "<br>\n";
}
