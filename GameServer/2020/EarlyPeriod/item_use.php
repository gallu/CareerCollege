<?php  // item_use.php
// http://dev2.m-fr.net/アカウント名/item_use.php
require_once('./PC.php');
require_once('./PCUnit.php');
require_once('./dice.php');
require_once('./item_use_no.php');
require_once('./item_use_macro.php');

//
$pc = new PC(200, 120, dice('3d6'), dice('3d6'), dice('3d6'), dice('3d6'));
var_dump($pc);
$pc->damageHp(100);
$pc->damageMp(50);
//var_dump($pc);
$pc->print();

/*
$pcu = new PCUnit();
//var_dump($pcu);
var_dump($pcu->setStr(10));
var_dump($pcu->getStr());
*/


/*
// アイテムを使ってみる
item_use_macro($pc, 'HP:+10');
$pc->print();
//item_use_macro($pc, 'HP:+9999');
//$pc->print();
item_use_macro($pc, 'HP:+2d6+5');
$pc->print();

item_use_macro($pc, 'MP:+5');
$pc->print();
item_use_macro($pc, 'MP:+20%');
$pc->print();

item_use_macro($pc, 'HP:+10,MP:+10');
$pc->print();

$pc->damageMp(50);
$pc->print();

item_use_macro($pc, 'HP:-2d6,MP:+30');
$pc->print();
*/

/*
 1: HPを10点回復
 2: HPを4ｄ8点回復
 3: HPを全回復
 4: MPを5点回復
 5: MPを"最大MPの2割"回復
 6: HPを10点、MPを10点回復
 */
/*
item_use_no($pc, 1);
$pc->print();
//item_use_no($pc, 99);
item_use_no($pc, 2);
$pc->print();
//
item_use_no($pc, 3);
$pc->print();
//
item_use_no($pc, 4);
$pc->print();
//
item_use_no($pc, 5);
$pc->print();
//
item_use_no($pc, 6);
$pc->print();
*/










