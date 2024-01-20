<?php  // lq1.php
/*
問)
自分自身のファイルは __FILE__ でファイル名が取得できます。
自分自身のファイルを全部読み込み、出力しなさい。
 */
echo file_get_contents(__FILE__);

var_dump( file(__FILE__) );
