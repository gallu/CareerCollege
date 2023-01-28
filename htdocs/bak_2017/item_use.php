<?php
// item_use.php
require_once('./pc.php');
require_once('./item_use_1.php');
require_once('./item_use_2.php');

//
$pc = new pc(1000, 500);
//var_dump($pc);
// (回復させるために)ダメージを入れておく
$pc->damage_hp(mt_rand(1, 999));
$pc->damage_mp(mt_rand(1, 500));
//
$pc->view();

// 回復アイテムを使う
//item_use_1(アイテムの情報, PCの情報);
//item_use_1(99, $pc);
//item_use_2('hp_heal:-50/mp_heal:50', $pc);
item_use_2('hp_heal:500/mp_heal:-10', $pc);

//
echo "回復アイテム使用<br>\n";
$pc->view();
