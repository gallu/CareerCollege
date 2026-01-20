<?php  // box_gacha_reset.php
require_once __DIR__ . "/loot_box_data.php";
require_once __DIR__ . "/shuffle.php";

// セッションを開始する
session_start();

// 「カードのセット」を用意する
$cards = [];
foreach ($loot_box_data as $c) {
    for ($i = 0; $i < $c["probability"]; ++$i) {
        $cards[] = $c;
    }
}

// シャッフルする
$cards = FYshuffle($cards);
// print_r($cards);

// リセットされたボックスガチャの内容をセッションに格納する
$_SESSION['box_gacha'] = $cards;

?>
リセットしました。<br>
<a href="box_gacha_top.php">戻る</a>
