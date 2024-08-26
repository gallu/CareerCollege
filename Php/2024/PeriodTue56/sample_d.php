<?php  // sample_d.php

$fn = '/var/www/html/sample.pdf';

// XXX 認可処理とかある想定

// okぽいのでダウンロードさせる
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename=hoge.pdf');
echo file_get_contents($fn);

