<?php  // upload3.php

// var_dump($_FILES);

// upload errorの確認
if (UPLOAD_ERR_OK !== $_FILES["csv"]["error"]) {
    // XXX
    echo "ダメだったぽ";
    exit;
}

// mime typeの確認
$mime = mime_content_type($_FILES["csv"]["tmp_name"]);
// var_dump($mime);
// 許可するmime type一覧
$allow_types = [
    "text/csv" => true,
    "text/plain" => true,
];
if (false === isset($allow_types[$mime])) {
    // XXX
    echo "しらんtypeだねぇ";
    exit;
}

// csvの解析
$fobj = new SplFileObject($_FILES["csv"]["tmp_name"]);
$fobj->setFlags(SplFileObject::READ_CSV);
foreach ($fobj as $no => $row) {
    // 「空の行」は飛ばす
    if ($row === [null]) {
        continue;
    }
    // 対象のファイルか確認する(業務要件: 技術上の制約ではない)
    if (0 === $no) {
        if ("items" !== $row[0]) {
            // XXX
            echo "対象ファイルではない!!";
            exit;
        }
        continue;
    }
    // ヘッダ行は捨てる
    if (1 === $no) {
        continue;
    }

    // 文字コードの変換
    $row_e = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');

    var_dump($row_e);
}


