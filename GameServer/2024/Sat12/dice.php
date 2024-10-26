<?php  // dice.php
declare(strict_types=1);

// ダイスを振る関数
function dice($base_string) {
    // var_dump($base_string);
    // 大文字のDが入ってたら小文字に変換する
    $base_string = strtolower($base_string);

    // 引数から nとmを切り出す
    $arr = explode("d", $base_string);
    // var_dump($arr);
    // 配列が1つなら「dがない」と思われるのでそのままreturnする
    if ( count($arr) === 1 ) {
        return (int)$arr[0];
    }
    // 2つの数値を取り出す
    $n = (int)$arr[0];
    $m = (int)$arr[1];
    // var_dump($n, $m);

    // n回ループ
    $total = 0;
    for ($i = 0; $i < $n; ++$i) {
        // echo "ループ <br>\n";
        // m面ダイスを振る
        $d = random_int(1, $m);
        // var_dump($d);
        $total += $d;
    }

    return $total;
}
