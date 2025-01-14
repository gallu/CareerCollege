<?php  // battle_init.php
require_once __DIR__ . "/BattlePc.php";
require_once __DIR__ . "/BattleUtil.php";
require_once __DIR__ . "/BattleLog.php";
require_once __DIR__ . "/BattleLogDamage.php";
require_once __DIR__ . "/BattleLogDead.php";
require_once __DIR__ . "/BattleLogDodge.php";
require_once __DIR__ . "/BattleLogHeal.php";
require_once __DIR__ . "/BattleLogMpEmpty.php";

ob_start();
session_start();
