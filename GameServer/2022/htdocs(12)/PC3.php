<?php   // PC3.php
//   https://dev2.m-fr.net/アカウント名/PC3.php
require_once(__DIR__ . "/dice.php");

class PC {
    //
    public function __construct($name) {
        // 名前を設定する
        $this->name = $name;
        // 「持っている武器」を設定する
        $this->weapon = $this->choiceWeapon();
        // 「持っている防具」を設定する
        $this->armor = $this->choiceArmor();

        // 各パラメタを設定する
        $this->STR = dice("3d6");
        $this->DEX = dice("3d6");
        $this->INT = dice("3d6");
        $this->WIZ = dice("3d6");
        $this->CON = dice("3d6");
        $this->CHA = dice("3d6");
        //
        $this->max_hp = dice("3d8");
        $this->hp = $this->max_hp;
        $this->max_mp = dice("3d8");
        $this->mp = $this->max_mp;
    }
    
    // キャラ生成時の武器の選択
    protected function choiceWeapon() {
        // 武器一覧
        $weapons = [
            ["name" => "ナイフ","damage" => "1d4", "hit" => 5],
            ["name" => "片手剣","damage" => "1d6", "hit" => 2],
            ["name" => "斧","damage" => "1d8", "hit" => 0],
            ["name" => "両手剣","damage" => "1d10", "hit" => 0],
            ["name" => "ポールアーム","damage" => "2d10", "hit" => -3],
            ["name" => "えくすかりばあ","damage" => "4d8", "hit" => 5],
        ];
        //
        $i = random_int(0, count($weapons)-1);
        return $weapons[$i];
    }
    // キャラ生成時の防具の選択
    protected function choiceArmor() {
        $armors = [
            ["name" => "ボロボロの服", "dodge" => 0, "ppoint" => 0],
            ["name" => "ローブ", "dodge" => 2, "ppoint" => 0],
            ["name" => "革鎧", "dodge" => 1, "ppoint" => 1],
            ["name" => "鎖帷子", "dodge" => 0, "ppoint" => 2],
            ["name" => "プレートメール", "dodge" => -5, "ppoint" => 4],
            ["name" => "みかわしの服", "dodge" => 7, "ppoint" => 0],
        ];
        //
        $i = random_int(0, count($armors)-1);
        return $armors[$i];
    }
    
    // イニシアチブ値
    // XXX 1d6 + dexボーナス + intボーナス
    public function getInitiative() {
        return dice("1d6") + intval($this->DEX / 5) + intval($this->INT / 5);
    }

    // 命中値
    public function getHit() {
        return dice("2d6") + intval($this->DEX / 5) + $this->weapon["hit"];
    }
    // 回避値
    public function getDodge() {
        return dice("2d6") + intval($this->DEX / 5) + $this->armor["dodge"];
    }
    // ダメージ軽減値
    public function getProtectionPoint() {
        return intval($this->CON / 5) + $this->armor["ppoint"];
    }

    // 攻撃ダメージの値
    public function hitDamage() {
        return dice($this->weapon["damage"]) + intval($this->STR / 5);
    }

    // HPを回復する
    public function heal($num) {
        // hpを増やす(回復する)
        $this->hp += $num;

        // 最大HPよりでかくなったら、最大HPまでを上限にする
        if ($this->hp > $this->max_hp) {
            $this->hp = $this->max_hp;
        }
    }

    // MPを消耗する
    public function damageMp($num) {
        $this->mp -= $num;
    }

    // ダメージを負う
    public function damage($num) {
        $this->hp -= $num;
    }
    // 生死判定(生きてたらtrue)
    public function isAlive() {
        return $this->hp >= 1;
    }

    //
    public function getMp() {
        return $this->mp;
    }

    //
    public function print() {
        echo "HP: {$this->hp}/{$this->max_hp} ";
        echo "MP: {$this->mp}/{$this->max_mp} <br>";
        echo "{$this->weapon["name"]}  {$this->weapon["damage"]}（命中 {$this->weapon["hit"]}） <br>";
        echo "{$this->armor["name"]}  回避:{$this->armor["dodge"]} 防護点{$this->armor["ppoint"]} <br>";
        echo "STR: {$this->STR} ";
        echo "DEX: {$this->DEX} ";
        echo "CON: {$this->CON} <br>";
        echo "<hr>";
/*
        echo "INT: {$this->INT} <br>";
        echo "WIZ: {$this->WIZ} <br>";
        echo "CHA: {$this->CHA} <br>";
*/
    }
    public function getName() {
        return $this->name;
    }
    // 行動
    // hitだったら物理攻撃(attack)、healだったら治療魔法(heal)
    public function setAction($v) {
        if ("heal" === $v) {
            $this->action = "heal";
        } else {
            // XXX デフォルトはattack
            $this->action = "attack";
        }
    }
    public function getAction() {
        return $this->action;
    }

    //
    private $name; // お名前
    private $weapon; // 持ってる武器
    private $armor; // 持ってる防具
    //
    private $STR; // 筋力
    private $DEX; // 敏捷力
    private $INT; // 知力
    private $WIZ; // 賢さ
    private $CON; // 耐久力
    private $CHA; // 魅力
    //
    private $hp;
    private $max_hp;
    private $mp;
    private $max_mp;
    //
    private $action;
}
