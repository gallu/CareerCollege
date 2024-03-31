<?php  declare(strict_types=1); // e01.php 
/*
/tmp/users.csv のCSVファイルを「CSVファイルとして」読み込んで出力するコードを書きなさい。
CSVファイルはSJISなので、出力時にUTF-8に文字コード変換しなさい。
*/
$fn = "/tmp/users.csv";

//
$fobj = new SplFileObject($fn);
$fobj->setFlags(SplFileObject::READ_CSV);
foreach ($fobj as $no => $row) {
    // 文字コードを変換
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');
    var_dump($row);
}

//
$fp = fopen($fn, 'r');
while(false !== ($row = fgetcsv($fp))) {
    // 文字コードを変換
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');
    var_dump($row);
}
fclose($fp);
