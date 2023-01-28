<?php   // file_csv_2.php

$fn = __DIR__ . '/dummy.csv';
$fn = 'php://filter/read=convert.iconv.SJIS-win%2FUTF-8/resource=' . $fn;
//
$f_obj = new SplFileObject( $fn );
$f_obj->setFlags(SplFileObject::READ_CSV);

foreach($f_obj as $no => $line) {
    // 1行目はヘッダなので処理をすっとばす
    if (0 === $no) {
        continue;
    }
    //
    var_dump($line);
}
