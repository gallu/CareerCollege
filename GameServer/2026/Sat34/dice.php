<?php  // dice.php
declare(strict_types=1);

function dice(string $base_string): int {
    // Dが入ってきた時にdに変える
    $base_string = strtolower($base_string);

    // dで切り分ける
    $arr = explode("d", $base_string);
    // var_dump($arr);

    $times = (int)$arr[0]; // 繰り返す回数
    $dice_type = (int)$arr[1]; // 振るサイコロの種類

    //
    $total = 0;
    for ($i = 0; $i < $times; ++$i) {
        $r = random_int(1, $dice_type);
        $total += $r;
    }
    return $total;
}
