<?php  // upload.php

//var_dump($_FILES['userfile']);

// CSVファイルをゲトして
$csv_file_name = $_FILES['userfile']['tmp_name'];
//
if (false === is_uploaded_file($csv_file_name)) {
    echo 'なんかおかしいぽいよ？';
    exit;
}
//
$file_name = 'php://filter/read=convert.iconv.SJIS-win%2FUTF-8/resource=' . $csv_file_name;

// csvとして分解して
$f_obj = new SplFileObject($file_name);
$f_obj->setFlags(SplFileObject::READ_CSV | SplFileObject::DROP_NEW_LINE);

//
foreach($f_obj as $no => $datum) {
    // insertしたりupdateしたり
    var_dump($datum);
}

