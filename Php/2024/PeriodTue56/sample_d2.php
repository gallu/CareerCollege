<?php  // sample_d2.php
// https://dev2.m-fr.net/furu/T56/sample_d2.php?fn=sample.pdf
// https://dev2.m-fr.net/furu/T56/sample_d2.php?fn=sample2.pdf
// https://dev2.m-fr.net/furu/T56/sample_d2.php?fn=sample3.pdf
// https://dev2.m-fr.net/furu/T56/sample_d2.php?fn=/../../../../../../../../../etc/passwd

// $fn = '/var/www/html/' . $_GET['fn'];
// var_dump($fn); exit;

// （第一種)ホワイトリスト
$wl = [
    'sample.pdf' => 'sample.pdf',
    'sample2.pdf' => 'sample2.pdf',
    'sample3.pdf' => 'sample3.pdf',
];

if (false === isset($wl[$_GET['fn']])) {
    echo "ねぇよンなファイル";
    exit;
}

$fn = $wl[$_GET['fn']];


// XXX 認可処理とかある想定

// okぽいのでダウンロードさせる
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename=hoge.pdf');
echo file_get_contents($fn);









