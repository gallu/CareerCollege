<?php  // Item.php

class Item {
    readonly public array $datum;
    
    public function __construct(string $item_id) {
        // DBハンドルを取得
        $dbh = DBConnection::getHndle();
        /* DBからデータを読み込む */
        // プリペアドステートメント(準備された文)を作成
        $sql = 'SELECT * FROM items_v2 WHERE id = :item_id ;';
        $pre = $dbh->prepare($sql);
        // プレースホルダに値をバインド
        $pre->bindValue(":item_id", (int)$item_id, PDO::PARAM_INT);
        // SQLを実行
        $r = $pre->execute();
        // var_dump($r);
        // データを取得
        $datum = $pre->fetch();
        if ($datum === false) {
            throw new Exception("存在しないアイテムだよ？: {$item_id}");
        }
        $this->datum = $datum;
    }
}