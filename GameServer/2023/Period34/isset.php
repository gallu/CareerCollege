<?php  // isset.php
/*
if (isset($awk) === false) {
    $awk = [
        "win_counter" => 0,
        "lose_counter" => 0,
    ];
}
*/
// $awk = $awk ?? ["win_counter" => 0,"lose_counter" => 0];
$awk ??= [
    "win_counter" => 0,
    "lose_counter" => 0,
];

$awk["win_counter"] ++;
echo $awk["lose_counter"];
