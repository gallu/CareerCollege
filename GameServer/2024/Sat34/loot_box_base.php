<?php  // loot_box_base.php
declare(strict_types=1);
require_once __DIR__ . "/dbh.php";

readonly class Card {
    public function __construct(
        public int $id,
        // public int|float $probability,
        public int $probability,
        public string $name,
    ){}
}

function getCardList(int $lootbox_type_id): array {
    Db::$db_name = 'game2024';
    Db::$username = 'game2024_u';
    Db::$password = 'game2024_p';
    $dbh = Db::getDbh();
    // var_dump($dbh);
    
    // プリペアドステートメントの作成
    $sql = '
        SELECT *
          FROM lootboxes
               LEFT JOIN cards ON cards.card_id = lootboxes.card_id -- card_nameの情報をくっつける
         WHERE lootbox_type_id=:lootbox_type_id
         ORDER BY probability DESC -- 確率の大きい順にする
        ;
    ';
    $pre = $dbh->prepare($sql);
    // プレースホルダへの値のバインド
    $pre->bindValue(":lootbox_type_id", $lootbox_type_id);
    // SQLの実行
    $r = $pre->execute();
    // var_dump($r);
    
    $data = $pre->fetchAll();
    // var_dump($data);
    
    $r = [];
    foreach ($data as $datum) {
        $r[] = new Card($datum["card_id"], $datum["probability"], $datum["card_name"]);
    }

    // $r = [
        // // id, 確率, カード名
        // new Card(1, 40, 'コボルト'),
        // new Card(2, 30, 'ゴブリン'),
        // new Card(3, 15, 'オーク'),
        // new Card(4, 10, 'グール'),
        // new Card(5, 4, 'ジャイアント'),
        // new Card(6, 1, 'ドラゴン'),
    // ];
    
    return $r;
}
