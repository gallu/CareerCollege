<?php  // box_reset.php
declare(strict_types=1);
require_once __DIR__ . "/box_common.php";

$list_base = getCardList(1);
// var_dump($list_base);

$list = [];
foreach($list_base as $c) {
    for($i = 0; $i < $c->probability; ++$i) {
        $list[] = $c;
    }
}
// shuffle
$list = fyShuffle($list);
// var_dump($list);

// セッションに情報を保持する
$_SESSION[BOX_LOOTBOX] = $list;

// XXX
echo "リセット完了";

