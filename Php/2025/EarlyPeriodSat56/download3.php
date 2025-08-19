<?php  // download3.php
/*
 * 管理画面とかで「データ」とかのCSVダウンロード
 */
// データをDBから取得した(って想定でランダムにデータ作成)
function r(): int {
    return random_int(0, 99999);
}
$data = [
    ["1st", "2nd", "3rd"],
    [r(), r(), r()],
    [r(), r(), r()],
    [r(), r(), r()],
];
// var_dump($data);

// ダウンロードファイル名作成
$dt = date('YmdHis');
$dfn = "data.{$dt}.csv";

// ヘッダ出力
header('Content-type: text/csv');
header("Content-Disposition: attachment; filename={$dfn}");

// body出力
$fp = fopen("php://output", "w");
// var_dump($fp);

foreach ($data as $datum) {
    fputcsv($fp, $datum, escape: "");
}

fclose($fp);
