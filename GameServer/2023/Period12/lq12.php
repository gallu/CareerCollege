<?php  // lq12.php
/*
問
以下の関数を作成しなさい。

関数名 getZip
    引数 $fn
    処理 引数 $fn には、csvのファイル名が入っています
        空の配列 $zip を用意します。
        CSVファイルを、csvとして読み込んで１レコード１要素として $zip に格納します
        各納前に、文字コードを変換してください(ファイルはSJIS、それをUTF-8に変換)
    戻り値 csvの中身が全部入った $zip

上述関数を作成して、引数に "/tmp/13TOKYO.CSV" を与え、ファイルの中身を全部取得してvar_dumpで出力しなさい
 */
function getZip($fn) {
    //
    $fp = fopen($fn, "r");
    // var_dump($fp);

    //
    $zip = [];
    while(true) {
        $row = fgetcsv($fp);
        if (false === $row) {
            break;
        }
        $row = mb_convert_encoding($row, "UTF-8", "SJIS");
        // var_dump($row);
        $zip[] = $row;
    }
    //
    fclose($fp);

    return $zip;
}

$z = getZip("/tmp/13TOKYO.CSV");
var_dump($z);
