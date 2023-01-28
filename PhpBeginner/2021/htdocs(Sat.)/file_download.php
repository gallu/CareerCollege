<?php   //  file_download.php

//
$data = [
    ['あ', 'い', 'う'],
    ['a,a', "b \n b", 'c"c'],
    [1, 2, 3],
];
//var_dump($data); exit;

$date_string = date('Ymd');
$fn = "sample_{$date_string}.csv";
//var_dump($fn); exit;

// ヘッダの出力
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=' . $fn);

// 本体の出力
/*
// XXX これはダメなパターン
foreach($data  as  $datum) {
    $s = implode(',', $datum);
    echo mb_convert_encoding($s, 'SJIS', 'UTF-8');
    echo "\n";
}
*/

/*
//
ob_start();
$fp = fopen('php://output', 'w');
foreach($data  as  $datum) {
    fputcsv($fp, $datum);
}
$s = ob_get_clean();
echo mb_convert_encoding($s, 'SJIS', 'UTF-8');
*/

/*
// UTF-8からSJIS-winへ変換するフィルター
$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'convert.iconv.UTF-8/CP932//TRANSLIT', STREAM_FILTER_WRITE);
foreach($data  as  $datum) {
    fputcsv($fp, $datum);
}
*/

//
$file_name = 'php://filter/write=convert.iconv.UTF-8%2FSJIS-win/resource=php://output';
$file_obj = new SplFileObject($file_name, 'w');
foreach($data  as  $datum) {
    $file_obj->fputcsv($datum);
}


