<?php  // form2.php

// var_dump( $_GET );
// var_dump( $_POST );

function h(string|array|null $s): string|array|null {
    if (null === $s) {
        return null;
    }
    // 配列なら、再帰的に呼び出して解決する
    if (is_array($s)) {
        $r = [];
        foreach($s as $v) {
            $r[] = h($v);
        }
        return $r;
    }

    return htmlspecialchars($s); // PHP8.1以降ならこれでok
}

$hide = $_POST["hide"] ?? "";
var_dump(h($hide));

$str = $_POST["str"] ?? "";
var_dump(h($str));

$pw = $_POST["pw"] ?? "";
var_dump(h($pw));

$race = $_POST["race"] ?? null;
var_dump(h($race));

$job = $_POST["job"] ?? [];
var_dump(h($job));

