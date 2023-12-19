<?php  // form2.php

// var_dump( $_GET );
// var_dump( $_POST );

// データ取得
$params = [
    // 項目名 => デフォルト値
    "str" => "",
    "pw" => "",
    "ra" => "",
    "che" => [],
];
$data = [];
foreach ($params as $k => $def) {
    $data[$k] = $_POST[$k] ?? $def;
}

foreach ($data as $k => $v) {
    if (is_string($v)) {
        echo htmlspecialchars($k) , " is " , htmlspecialchars($v) , "<br>\n";
    } elseif (is_array($v)) {
        $awk = [];
        foreach ($v as $s) {
            $awk[] = htmlspecialchars($s);
        }
        echo htmlspecialchars($k) , " is " , implode(", ", $awk) , "<br>\n";
    }
}
