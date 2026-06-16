<?php  // dice_test.php
declare(strict_types=1);

require_once  __DIR__ . "/dice.php";

// テストデータ
$tests = [
    ["param" => "2d6" , "min" => 2, "max" => 12],
    ["param" => "5d10", "min" => 5, "max" => 50],
    ["param" => "3D8" , "min" => 3, "max" => 24],
];

// テスト処理
$success = 0;
$falied = 0;
foreach ($tests as $t) {
    $r = dice($t["param"]);
    // echo "{$t['param']} dice is {$r} <br>";

    if ( ($t["min"] <= $r)&&($r <= $t["max"]) ) {
        $success ++;
    } else {
        echo "falied: {$t['param']} dice is {$r} <br>";
        $falied ++;
    }
}
echo "success: {$success}, falied: {$falied} <br>";
