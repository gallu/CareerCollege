<?php  // battle_init.php
/*
 * 全体で使う初期処理
 */
ob_start();
session_start();

require_once  __DIR__ . "/battle_common.php";
require_once  __DIR__ . "/battle_make_chara.php";

