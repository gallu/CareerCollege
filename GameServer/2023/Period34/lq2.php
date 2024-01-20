<?php  // lq2.php
/*
問)
/tmp/13TOKYO.CSV に、東京都の郵便番号のCSVファイルがあります。
このファイルの先頭10行を読み込み、CSVデータとして適切に解析をして、var_dumpで出力をしなさい。
ファイルはSJISで書かれているので、出力する文字コードに注意する事。
 */
$fn = '/tmp/13TOKYO.CSV';

$fp = fopen($fn, 'r');
$fobj = new SplFileObject($fn);
$fobj->setFlags(SplFileObject::READ_CSV | SplFileObject::DROP_NEW_LINE);

foreach ($fobj as $no => $row) {
    if (10 <= $no) {
        break;
    }
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS');
    var_dump($row);
}
