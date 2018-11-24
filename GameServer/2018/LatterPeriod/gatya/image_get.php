<?php

require_once('./DB.php');

//
$dbh = DB::getHandle();
// がちゃtypeのカード一覧を取得
$sql = 'SELECT * FROM cards;';
$pre = $dbh->prepare($sql);

//$pre->bindValue('', $);

//
$r = $pre->execute();
$list = $pre->fetchAll(); // XXX チェック未実装

foreach($list as $datum) {
    // URIが空
    if ('' === ($uri = $datum['image_uri'])) {
var_dump($datum['card_id']);
        continue;
    }
    $uri_parts = parse_url($uri);

    // URIがパースできない
    if (false === $uri_parts) {
var_dump($datum['card_id']);
        continue;
    }
    if (false == isset($uri_parts['host'])) {
        //var_dump($uri, $datum['card_id'], $uri_parts);
        continue;
    }

    // 自ドメイン
    if ('dev2.m-fr.net' === $uri_parts['host']) {
        continue;
    }

    // else

    //
    $no = $datum['card_id'];
    // 拡張子の把握
    $ext = (new SplFileInfo($uri_parts['path']))->getExtension();
//var_dump("/home/furu/wwwroot/gatya/images/{$no}.{$ext}");
//if ('' === $ext) {
    //var_dump($uri, $datum['card_id'], $uri_parts);
//}

    // ファイルの取得
    $cmd = "wget {$uri} -O /home/furu/wwwroot/gatya/images/{$no}.{$ext}";
//var_dump($cmd);
    //`$cmd`;

    // URIの組み立てとupdate
    //$uri = "http://dev2.m-fr.net/furu/gatya/images/{$no}.{$ext}";
    //update
}




