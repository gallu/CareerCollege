<?php  // select.php
declare(strict_types=1);

// DBハンドルの取得
require_once __DIR__. '/dbh.php';
$dbh = Dbh::getDbh();
// var_dump($dbh);

// 「外部から入ってきた情報」と仮定
$max_price = "980";

// 「死んでも」書いてはいけない！！！！！！！！！
// $sql = "SELECT * FROM items WHERE price <= {$max_price};";

// プリペアド ステートメント(準備された文)を用意する
$sql = 'SELECT * FROM items WHERE price <= :price ;';
$pre = $dbh->prepare($sql);
// var_dump($pre);

// プレースホルダに値をバインドする
$pre->bindValue(':price', (int)$max_price, PDO::PARAM_INT);

// 実行する
$r = $pre->execute();
// var_dump($r);

// データを取得する
/*
$data = $pre->fetchAll();
// var_dump($data);
echo "<table>";
foreach ($data as $datum) {
    echo "<tr>";
    echo "<td>{$datum['item_id']}";
    echo "<td>{$datum['item_name']}";
    echo "<td>{$datum['price']}";
}
echo "</table>";
*/

// バッチとかでデータを取得する
while(false !== ($datum = $pre->fetch())) {
    var_dump($datum);
}

// // これはやめとけ
// while($datum = $pre->fetch()) {
    // var_dump($datum);
// }
