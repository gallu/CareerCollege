<?php  // upload2.php

var_dump($_FILES);

// upload errorの確認
if (UPLOAD_ERR_OK !== $_FILES["img"]["error"]) {
    // XXX
    echo "ダメだったぽ";
    exit;
}

// uploadされたファイルの中身を確認する
$mime = mime_content_type($_FILES["img"]["tmp_name"]);
var_dump($mime);
// 許可するmime type一覧
$allow_types = [
    "image/jpeg" => ".jpeg",
    "image/png" => ".png",
    "image/gif" => ".gif",
];
if (false === isset($allow_types[$mime])) {
    // XXX
    echo "しらんtypeだねぇ";
    exit;
}

// Exif情報のいくつかを削除する(つもり)

// 保存用のファイル名を作成する
// XXX ディレクトリを付けるんだけど、今回そこは省略
$save_filename = bin2hex(random_bytes(16)) . $allow_types[$mime];
echo "<br> filename is {$save_filename} <br>";

// ストレージに保存する(ふり)
// $r = move_uploaded_file($_FILES["img"]["tmp_name"], $save_filename);
