<?php  // lq1.php
/*
問)
自分自身のファイルは __FILE__ でファイル名が取得できます。
自分自身のファイルを全部読み込み、出力しなさい。
 */
$fn = __FILE__;

// echo file_get_contents($fn);
$s = file_get_contents($fn);
echo $s;

// var_dump(file($fn));
$lines = file($fn);
var_dump($lines);

//
$fobj = new SplFileObject($fn);
foreach ($fobj as $no => $line) {
    echo $line;
}

//
$fp = fopen($fn, "r");
while(false !== ($line = fgets($fp))) {
    echo $line;
}
fclose($fp);
