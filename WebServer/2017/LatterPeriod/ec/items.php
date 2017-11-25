<?php
// items.php

// 商品IDを把握する
$id = (string)@$_GET['id'];
$id = $_GET['id']  ??  ''; // PHP7限定

// 「商品ID」の情報を(DBとかから)get
try {
    $book = new Books($id);
} catch(Exception $e) {
    // XXX 「商品が見つからない」エラー処理
}
/*
$book = new Books();
// DBからSELECT文で情報を取り出して
$sql = 'SELECT * FROM items WHERE item_id = :item_id;';
$res = $dbh->XXX();
// $bookにsetする
$book->setName($res['name']);
$book->setIsbn($res['isbn']);
// 以下略
$book->setPrice(0); // XXX これは嫌だ
*/


// 「１商品」の詳細なPageを出力
//$template_obj->変数をアサイン('名前', $data);
$template_obj->アサイン('商品情報', $book->getData());

