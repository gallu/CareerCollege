<?php   // file_upload.php

//var_dump($_FILES);
$file = $_FILES['userfile'];

//
if (false === is_uploaded_file($file['tmp_name'])) {
    echo "ファイルがおかしい？<br>\n";
    exit;
}
//
if (UPLOAD_ERR_OK !== $file['error']) {
    echo "ファイルがうまく上がってない？<br>\n";
    exit;
}
// サイズ制限
if (10000 < $file['size']) {
    echo "でかい！！<br>\n";
    exit;
}
//var_dump( $file['tmp_name'] ); exit;

//
$fn = 'php://filter/read=convert.iconv.SJIS-win%2FUTF-8/resource=' . $file['tmp_name'];
//
$f_obj = new SplFileObject( $fn );
$f_obj->setFlags(SplFileObject::READ_CSV);

foreach($f_obj as $no => $line) {
    // 1行目はヘッダなので処理をすっとばす
    if (0 === $no) {
        continue;
    }
    //
    foreach($line as $no => $s) {
        echo "{$no}: " , htmlspecialchars($s, ENT_QUOTES) , "<br>\n";
    }
    echo "<br>\n";
}

