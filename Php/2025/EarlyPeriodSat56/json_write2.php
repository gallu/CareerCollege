<?php  // json_write2.php

$data = [
    "status" => 200,
    "equip"=> [
        "weapon" => "ダガー",
    ],
];
echo json_encode($data), "<br>";

$data = [
    "status" => 200,
    "equip"=> [ // {}が期待されるが、実際は[]になる
        // "weapon" => "ダガー",
    ],
];
echo json_encode($data), "<br>";

// 「空になりうるhash配列」は、ArrayObjectを使うとよい
$data = [
    "status" => 200,
    "equip"=> new ArrayObject([
        "weapon" => "ダガー",
    ]),
];
echo json_encode($data), "<br>";

$data = [
    "status" => 200,
    "equip"=> new ArrayObject([
        // "weapon" => "ダガー",
    ]),
];
echo json_encode($data), "<br>";