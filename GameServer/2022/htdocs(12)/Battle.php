<?php  // Battle.php
/**
 * 戦闘処理にまつわるものをまとめたクラス
 */

class Battle {
    /**
     * 戦闘処理本体(AがBに攻撃)
     * $defender 攻撃された側のオブジェクト
     */
    public function attack($defender, $defender_name) {
        // ダメージの値を作成
        $d = random_int(1, 10);
        // メッセージを積む
        $_SESSION["battle_data"]["logs"][] = "{$defender_name}は {$d}のダメージ！！ <br>";
        // ダメージをPC/敵に適用
        $defender->damage($d);
    }
    
    // １ターンの戦闘
    public function oneTurnBattle() {
        // 敵がPCに攻撃
        $this->attack($_SESSION["battle_data"]["pc"], "PC");
        // PCが敵に攻撃
        $this->attack($_SESSION["battle_data"]["enemy"], "敵");
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
