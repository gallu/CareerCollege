<?php  // box_gacha_init.php
declare(strict_types=1);

require_once __DIR__ . "/loot_box_data.php";
require_once __DIR__ . "/shuffle.php";

// セッション開始
session_start();

// がちゃ用のカードbox一式をつくって
$cards = [];
foreach ($loot_box_data as $c) {
    for ($i = 0; $i < $c["probability"]; ++$i) {
        $cards[] = $c;
    }
}

// シャッフルして
$cards = FYShuffle($cards);
// print_r($cards);

// sessionにしまう
$_SESSION["box_gacha"] = $cards;
?>
<a href="box_gacha_top.php">戻る</a>
