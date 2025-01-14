<?php  // box_common.php
/*
 * BOXがちゃ 共通
 */

// セッションのkey名
const BOX_LOOTBOX = "box_lootbox";

//
require_once __DIR__ . "/loot_box_base.php";
require_once __DIR__ . "/shuffle.php";

// セッション開始
ob_start();
session_start();
