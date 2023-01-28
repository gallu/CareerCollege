<?php  // Battle2.php
/**
 * 戦闘処理にまつわるものをまとめたクラス
 */

class Battle {
    /**
     * 治療呪文詠唱
     */
    public function heal($defender, $attacker) {
        // 残MPのチェック
        if (5 > $attacker->getMp()) {
            $_SESSION["battle_data"]["logs"][] = "{$attacker->getName()}の治療呪文 MPが足りない orz <br> ";
            return ;
        }

        // attacker側のHPを回復する
        $heal_point = dice("2d6");
        $attacker->heal($heal_point);
        $_SESSION["battle_data"]["logs"][] = "{$attacker->getName()}の治療呪文 {$heal_point}点 回復!! <br> ";
        
        // attacker側のMPを消費する
        $attacker->damageMp(5);
    }

    /**
     * 戦闘処理本体(AがBに攻撃)
     * $defender 攻撃された側のオブジェクト
     * $attacker 攻撃する側のオブジェクト
     */
    public function attack($defender, $attacker) {
        // 
        $_SESSION["battle_data"]["logs"][] = "{$attacker->getName()}の攻撃！！ ";
        // 命中判定
        $hit = $attacker->getHit();
        $dodge = $defender->getDodge();
        if ($hit <= $dodge) {
            $_SESSION["battle_data"]["logs"][] = "→ {$defender->getName()}は 攻撃を回避した！！ <br>";
            return ;
        }
        
        // ダメージの値を作成
        $d = $attacker->hitDamage();
        // ダメージ軽減判定
        $pp = $attacker->getProtectionPoint();
        // ダメージ計算
        $d -= $pp;
        if ($d <= 0) {
            $_SESSION["battle_data"]["logs"][] = "→ {$defender->getName()}は ダメージをブロックした！！ <br>";
            return;
        }

        // メッセージを積む
        $_SESSION["battle_data"]["logs"][] = "→ {$defender->getName()}は {$d}のダメージ！！ <br>";
        // ダメージをPC/敵に適用
        $defender->damage($d);
    }
    
    // １ターンの戦闘
    public function oneTurnBattle() {
        // 引数が長くなるから一時変数に入れておく
        $pc = $_SESSION["battle_data"]["pc"];
        $enemy = $_SESSION["battle_data"]["enemy"];

        // PCは入力された行動をとる
        $pc->setAction($_POST["action"] ?? "hit");
        // 敵は「５回に１回」の確率で治療呪文を使う
        if (0 === random_int(0, 4)) {
            $enemy->setAction("heal");
        } else {
            $enemy->setAction("hit");
        }

        // イニシアチブ判定
        $pc_initiative = $pc->getInitiative();
        $enemy_initiative = $enemy->getInitiative();
        //
        $_SESSION["battle_data"]["logs"][] 
            = "イニシアチブ: {$pc->getName()}:{$pc_initiative} / {$enemy->getName()}:{$enemy_initiative} <br>";

        // 先攻後攻を決める
        if ($pc_initiative >= $enemy_initiative) {
            $first_attack = $pc;
            $second_attack = $enemy;
        } else {
            $first_attack = $enemy;
            $second_attack = $pc;
        }

        // 先攻側攻撃処理
        $action = $first_attack->getAction();
        $this->$action($second_attack, $first_attack);
        // 死んだら攻撃できない
        if (false === $second_attack->isAlive()) {
            return ;
        }
        // 後攻側攻撃処理
        $action = $second_attack->getAction();
        $this->$action($first_attack, $second_attack);
    }

    // 現在のステータス表示
    public function printStatus() {
        echo "PC: ";
        $_SESSION["battle_data"]["pc"]->print();
        echo "敵: ";
        $_SESSION["battle_data"]["enemy"]->print();
    }
    
    // ログ表示
    public function printLog() {
        foreach($_SESSION["battle_data"]["logs"] as $log) {
            echo $log;
        }
    }
}
