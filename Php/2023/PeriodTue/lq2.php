<?php // lq2.php
/*
問)
/tmp/13TOKYO.CSV に、東京都の郵便番号のCSVファイルがあります。
このファイルの先頭10行を読み込み、CSVデータとして適切に解析をして、var_dumpで出力をしなさい。
ファイルはSJISで書かれているので、出力する文字コードに注意する事。
 */
$fn = "/tmp/13TOKYO.CSV";

$fobj = new SplFileObject($fn);
$fobj->setFlags(SplFileObject::READ_CSV);
foreach ($fobj as $no => $row) {
    if ($no >= 10) {
        break;
    }
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');
    var_dump($row);
}

$fp = fopen($fn, 'r');
for($i = 0; $i < 10; ++$i) {
    $row = fgetcsv($fp);
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');
    var_dump($row);
}
fclose($fp);


$fobj = new SplFileObject($fn);
for($i = 0; $i < 10; ++$i) {
    $row = $fobj->fgetcsv();
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');
    var_dump($row);
}
