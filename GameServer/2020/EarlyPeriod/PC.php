<?php  // PC.php
require_once('./PCUnit.php');

class PC {
    //
    public function __construct($hp, $mp, $str, $dex, $int, $con) {
        //
        $this->unit = [];
        $body = new PCUnit();
        //
        $body->setMax_hp($hp);
        $body->setMax_mp($mp);
        //
        $body->setStr($str);
        $body->setDex($dex);
        $body->setInt($int);
        $body->setCon($con);
        //
        $this->unit['body'] = $body;
        
        //
        $this->hp = $hp;
        $this->mp = $mp;
    }
    // 命中率
    public function getHit() {
        return intval($this->dex + ($this->int * 0.5));
    }
    // 攻撃力
    public function getAttack() {
        return intval($this->str + ($this->con * 0.5));
    }

    //
    public function damageHp($d) {
        $this->hp -= $d;
    }
    public function damageMp($d) {
        $this->mp -= $d;
    }
    //
    public function healHp($d) {
        $this->hp += $d;
        if ($this->max_hp < $this->hp) {
            $this->hp = $this->max_hp;
        }
    }
    public function healMp($d) {
        $this->mp += $d;
        if ($this->max_mp < $this->mp) {
            $this->mp = $this->max_mp;
        }
    }

    // アクセッサ
    public function __call($name, $arguments) {
//var_dump($name, $arguments);
        // タイプのチェック
        if (0 === strncmp($name, 'get', 3)) {
            if (0 !== count($arguments)) {
                throw new \Exception("getなのにパラメタの数がオカシイ！！");
            }
        } else {
            throw new \Exception("{$name}のメソッド名はオカシイ！！");
        }
        $param = strtolower(substr($name, 3));
//var_dump($type, $param);

        // パラメタ名の変換
        if ('maxhp' === $param) {
            $param = 'max_hp';
        }
        if ('maxmp' === $param) {
            $param = 'max_mp';
        }

        // パラメタ名のチェック
        // XXX PCUnit側でチェックできるので、こっちでは省略

        // 各unitの合計を加算してreturn
        $r = 0;
        $m = "get{$param}";
        foreach($this->unit as $u) {
            $r += $u->$m();
        }
        return $r;
    }

    //
    public function print() {
        echo "HP: {$this->hp}/{$this->getMaxHp()} / MP: {$this->mp}/{$this->getMaxMp()} <br>\n";
/*
        echo "STR:{$this->str}, DEX:{$this->dex}, INT:{$this->int}, CON:{$this->con} <br>\n";
        echo "命中率:{$this->getHit()}, 攻撃力:{$this->getAttack()} <br>\n";
        echo "<br>\n";
*/
    }


//
private $hp;
private $mp;
//
private $unit; // keyによって判定

}







