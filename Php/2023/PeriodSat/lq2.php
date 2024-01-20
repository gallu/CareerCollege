<?php  // lq2.php
/*
問)
/tmp/13TOKYO.CSV に、東京都の郵便番号のCSVファイルがあります。
このファイルの先頭10行を読み込み、CSVデータとして適切に解析をして、var_dumpで出力をしなさい。
ファイルはSJISで書かれているので、出力する文字コードに注意する事。
 */
//
$fn = "/tmp/13TOKYO.CSV";
$fobj = new SplFileObject($fn);
$fobj->setFlags(SplFileObject::READ_CSV);
// var_dump($fobj);
foreach (new LimitIterator($fobj, 0, 10) as $no => $row) {
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS');
    var_dump($row);
}
