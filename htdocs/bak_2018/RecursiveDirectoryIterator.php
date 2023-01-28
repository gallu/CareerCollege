<?php  // RecursiveDirectoryIterator.php
//
$dir = new RecursiveDirectoryIterator(
           __DIR__ // 基準になるディレクトリ
		 , FilesystemIterator::CURRENT_AS_FILEINFO // 戻り値をＦｉｌｅＩｎｆｏに
		  |FilesystemIterator::SKIP_DOTS // dotファイルをスキップ
        );
//
$itr = new RecursiveIteratorIterator(
           $dir
         , RecursiveIteratorIterator::LEAVES_ONLY // ファイルのみ
		);

// 「全ファイル」を取り出す
foreach($itr as $f) {
    var_dump($f);
}
