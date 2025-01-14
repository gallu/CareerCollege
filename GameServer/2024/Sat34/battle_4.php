<?php // battle_4.php
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
    $pc->healMp(999);
    $npc->healMp(999);
    // ログを初期化
    $_SESSION[BattleUtil::SESSION_KEY_BATTLE]["log"] = [];
} else {
    // ログを積む準備
    $log = $_SESSION[BattleUtil::SESSION_KEY_BATTLE]["log"] ?? [];

    do {
        // PCの攻撃
        if ("attack" === $c) {
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
        } elseif ("heal" === $c) {
            // 回復
            $r = $pc->useMp(5); // MPの消費
            if (true === $r) {
                $heal_num = dice("1d6") + 2;
                $pc->heal($heal_num);
                $log[] = new BattleLogHeal($pc->getName(), $heal_num);
            } else {
                // MP足りないorz
                // echo "MP足りないorz<br>";
                $log[] = new BattleLogMpEmpty($pc->getName(), "回復");
            }
        } else {
            echo "XXX";
            exit;
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
}

?>
<?php echo htmlspecialchars($pc->getName()) , ":", 
           "Hp ",
           htmlspecialchars((string)$pc->getHp()), "/", 
           htmlspecialchars((string)$pc->getMaxHp()) , ":", 
           "Mp ",
           htmlspecialchars((string)$pc->getMp()), "/", 
           htmlspecialchars((string)$pc->getMaxMp()) , "<br>\n"; ?>

<?php echo htmlspecialchars($npc->getName()) , ":", 
           "Hp ",
           htmlspecialchars((string)$npc->getHp()), "/", 
           htmlspecialchars((string)$npc->getMaxHp()) , ":",
           "Mp ",
           htmlspecialchars((string)$npc->getHp()), "/", 
           htmlspecialchars((string)$npc->getMaxHp()) , "<br>\n"; ?>

<?php
if ( $pc->isDead() === false && $npc->isDead() === false) { 
    echo '<a href="./battle_4.php?c=attack">殴る</a><br>';
    echo '<a href="./battle_4.php?c=heal">回復する</a><br>';
} else {
    echo '<a href="./battle.html">Topへ</a>';
}
?>



