<?php
// use_item.inc

/*
 * 「アイテムを使う」関数
 *
 * @param object $pc PCのインスタンス
 * @param int $item_no 使うアイテムの番号
 */
function use_item($pc, $item_no) {
  //
  switch($item_no) {
    case 1: // HP 100点回復
      $pc->heal_hp(100);
      break;

    case 2: // HP 500点回復
      $pc->heal_hp(500);
      break;

    case 101: // MP 100点回復
      $pc->heal_mp(100);
      break;

    case 201: // HP & MP 100点回復
      $pc->heal_hp(100);
      $pc->heal_mp(100);
      break;

    default:
      echo "未知のアイテム番号です\n";
      break;
  }
}

