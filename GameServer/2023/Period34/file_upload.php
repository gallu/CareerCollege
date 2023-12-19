<?php  // file_upload.php

// var_dump( $_POST );
// var_dump( $_FILES );
/*
array(1) {
  ["uf"]=>
  array(6) {
    ["name"]=>
    string(13) "テスト.pdf"
    ["full_path"]=>
    string(13) "テスト.pdf"
    ["type"]=>
    string(15) "application/pdf"

    ["tmp_name"]=>
    string(14) "/tmp/phpMK1bhH"
    ["error"]=>
    int(0)
    ["size"]=>
    int(17123)
  }
}*/

// header("Content-type: application/pdf");
// echo file_get_contents($_FILES["uf"]["tmp_name"]);

// 共通してやること
if (UPLOAD_ERR_OK !== $_FILES["uf"]["error"]) {
    echo "uploadに失敗しました";
    exit;
}

/*
// 「画像ファイルがアップロードされた」系
// 「保存先」は決めておく
$img_upload_path = "XXXX";

// uploadされたファイルが「画像であること」を確認する
// XXX $_FILESのname,type,full_pathを使っての判定は、絶対ダメ！！！
//　マジックナンバーで調べる　mime_content_type　
// または、画像変換をかける
$content_type = mime_content_type($_FILES["uf"]["tmp_name"]);
var_dump($content_type);

// 保存先のファイル名
// XXX $_FILESのname,full_pathを使うのは、絶対ダメ！！！
$uuid = trim(`uuidgen -r`);
var_dump($uuid);
*/

// CSVでマスタがアップロードされた時
//　マジックナンバーで調べる　mime_content_type（あんまりやらない)
$content_type = mime_content_type($_FILES["uf"]["tmp_name"]);
var_dump($content_type);
if ($content_type !== "text/csv") {
    echo "CSVじゃないよ？";
    exit;
}

// ぶんまわして処理していく
$fobj = new SplFileObject($_FILES["uf"]["tmp_name"]);
$fobj->setFlags(SplFileObject::READ_CSV | SplFileObject::DROP_NEW_LINE);
foreach ($fobj as $no => $row) {
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS');
    var_dump($row);
}







