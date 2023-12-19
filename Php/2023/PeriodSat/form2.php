<?php  // form2.php

// var_dump($_POST);

function h(string|array|null $s): string|array|null {
    // nullならそのまま突っ返す
    if (null === $s) {
        return null;
    }
    //　配列なら再帰的に処理する
    if (is_array($s)) {
        $r = [];
        foreach($s as $v) {
            $r[] = h($v);
        }
        return $r;
    }

    return htmlspecialchars($s); // PHP8.1以降ならこれでOK
}

$data = [];
$param = [
    "h_data" => "",
    "name" => "",
    "age" => "",
    "pw" => "",
    "favorite" => null,
    "hobby" => [],
    "memo" => "",
];
foreach ($param as $k => $default) {
    $data[$k] = $_POST[$k] ?? $default;
    var_dump( h($data[$k]) );
}
