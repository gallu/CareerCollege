<?php
// test_macro.php
require_once('./pc.inc');
require_once('./use_item_macro.inc');

// PC作成
$pc = new PC();
//
$pc->set_max_hp(1500);
$pc->set_max_mp(1000);
//
$pc->set_hp(500);
$pc->set_mp(200);
//
var_dump($pc);

//
use_item($pc, 'HP回復:100'); // HP 100点回復
var_dump($pc);

use_item($pc, 'MP回復:100'); // MP 100点回復
var_dump($pc);

use_item($pc, 'HP回復:200,MP回復:200'); // MP 100点回復
var_dump($pc);

