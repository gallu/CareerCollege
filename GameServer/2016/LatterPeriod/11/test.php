<?php
// test.php
require_once('./pc.inc');
require_once('./use_item.inc');

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
use_item($pc, 1); // HP 100点回復
var_dump($pc);

//
use_item($pc, 2); // HP 500点回復
use_item($pc, 2); // HP 500点回復
use_item($pc, 2); // HP 500点回復
var_dump($pc);

