<?php  // item_list.php

require_once __DIR__ . "/DBConnection.php";

class ItemList {
    public static function getList(): array {
        $dbh = DBConnection::getHndle();
        // プリペアドステートメント(準備された文)を作成
        $sql = 'SELECT * FROM items_v2 ORDER BY id ;';
        $pre = $dbh->prepare($sql);

        // プレースホルダに値をバインド
        // [memo]今回はプレースホルダがないのでバインドしていない

        // SQLを実行
        $r = $pre->execute();

        // データをまとめて読み込む
        $data = $pre->fetchAll();
        // var_dump($data);

        $ret = [];
        foreach ($data as $datum) {
            $ret[] = new Item($datum);
        }
        // var_dump($ret);
        return $ret;
    }
}

readonly class Item {
    public int $id;
    public string $name;
    public function __construct(array $item) {
        $this->id = $item["id"];
        $this->name = $item["name"];
    }
}

//
$items = ItemList::getList();
foreach ($items as $item) {
    $name_e = htmlspecialchars($item->name);
    echo "<a href=\"./item_use.php?item_id={$item->id}\">{$name_e}</a><br>";
}


