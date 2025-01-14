<?php  // file_upload.php

var_dump($_POST);
var_dump($_FILES);
/*
array(1) {
  ["foo"]=>
  array(6) {
    // 「信用してはいけない」データ
    ["name"]=>
    string(11) "sample.xlsx"
    ["full_path"]=>
    string(11) "sample.xlsx"
    ["type"]=>
    string(65) "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"

    // 信用できるデータ
    ["tmp_name"]=>
    string(14) "/tmp/phpUPWykt"
    ["error"]=>
    int(0)
    ["size"]=>
    int(9012)
  }
}
*/

$mime_type = mime_content_type($_FILES["foo"]["tmp_name"]);
var_dump($mime_type);

// localに保存するときのファイル名の作成
$fn = rtrim(`uuidgen -r`);
var_dump($fn);
// file_put_contents(保存用ディレクトリ . "/{$fn}", file_get_contents($_FILES["foo"]["tmp_name"]));
// move_uploaded_file($_FILES["foo"]["tmp_name"], 保存用ディレクトリ . "/{$fn}");


// csvファイルを受け取った時
if ("text/plain" === $mime_type || "text/csv" === $mime_type) {
    $fobj = new SplFileObject( $_FILES["foo"]["tmp_name"] );
    $fobj->setFlags(SplFileObject::READ_CSV);

    foreach ($fobj as $no => $datum) {
        if ($datum[0] === null) {
            continue;
        }
        $datum = mb_convert_encoding($datum, "UTF-8", "SJIS-win");
        var_dump($datum);
    }
}

