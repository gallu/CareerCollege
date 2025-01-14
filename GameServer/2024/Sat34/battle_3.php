<?php // battle_3.php
require_once __DIR__ . "/battle_init.php";

// PCとNPCの情報取得
$r = BattleUtil::get();
if (null === $r) {
    echo "キャラクタ未作成です";
    return;
}
$pc = $r->pc;
$npc = $r->npc;

// コマンドを取得
$c = $_GET["c"] ?? "";

// 初手なら初期化処理
if ("clear" === $c) {
    // 完全回復
    $pc->heal(999);
    $npc->heal(999);
    // ログを初期化
    $_SESSION[BattleUtil::SESSION_KEY_BATTLE]["log"] = [];
}

// ログを積む準備
$log = $_SESSION[BattleUtil::SESSION_KEY_BATTLE]["log"] ?? [];

do {
    // PCの攻撃
    if ($npc->isDodge($pc)) {
        // echo "回避<br>\n";
        $log[] = new BattleLogDodge($pc->getName(), $npc->getName());
    } else {
        $damage = $pc->getDamage();
        $npc->damage( $damage );
        $log[] = new BattleLogDamage($pc->getName(), $npc->getName(), $damage);
        if ($npc->isDead()) {
            $log[] = new BattleLogDead($npc->getName());
            break;
        }
    }

    // NPCの攻撃
    if ($pc->isDodge($npc)) {
        // echo "回避<br>\n";
        $log[] = new BattleLogDodge($npc->getName(), $pc->getName());
    } else {
        $damage = $npc->getDamage();
        $pc->damage( $damage );
        $log[] = new BattleLogDamage($npc->getName(), $pc->getName(), $damage);
        if ($pc->isDead()) {
            $log[] = new BattleLogDead($pc->getName());
            break;
        }
    }
} while(false);

// ログ出力
foreach($log as $o) {
    echo htmlspecialchars((string)$o), "<br>\n";
}

// ログの保存
$_SESSION[BattleUtil::SESSION_KEY_BATTLE]["log"] = $log;

?>
<?php echo htmlspecialchars($pc->getName()) , ":", 
           htmlspecialchars((string)$pc->getHp()), "/", 
           htmlspecialchars((string)$pc->getMaxHp()) , "<br>\n"; ?>

<?php echo htmlspecialchars($npc->getName()) , ":", 
           htmlspecialchars((string)$npc->getHp()), "/", 
           htmlspecialchars((string)$npc->getMaxHp()) , "<br>\n"; ?>

<?php
if ( $pc->isDead() === false && $npc->isDead() === false) { 
    echo '<a href="./battle_3.php?c=attack">殴る</a>';
} else {
    echo '<a href="./battle.html">Topへ</a>';
}
?>



