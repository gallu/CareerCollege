<?php // blackjack_test.php

require_once  __DIR__ . "/blackjack_function.php";

// totalCalculation のテスト
$success_cont = 0;
$error_cont = 0;

$tests = [
    [
        "name" => "Jなら10になるテスト",
        "hand" => [
            ["number" => 11],
        ],
        "want" => 10,
    ],
    [
        "name" => "JとQとKがそれぞれ10になるテスト",
        "hand" => [
            ["number" => 11],
            ["number" => 12],
            ["number" => 13],
        ],
        "want" => 30,
    ],
    // XXX A系のテストをいくつか積む
];

foreach($tests as $test) {
    $t = totalCalculation($test["hand"]);
    if ($test["want"] !== $t) {
        echo "ERROR!!: {$test["name"]}<br>\n";
        ++ $error_cont;
    } else {
        ++ $success_cont;
    }
}



echo "<br>\n";
echo "success: {$success_cont}<br>\n";
echo "error: {$error_cont}<br>\n";


