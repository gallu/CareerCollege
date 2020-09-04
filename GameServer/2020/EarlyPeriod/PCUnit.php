<?php //  PCUnit.php

/*
 * PCのパーツ(本体、装備品、バフやデバフ用)
 */
class PCUnit {
    //
    public function __construct() {
        // $data に一通りのkeyを発生させる
        foreach(array_merge($this::$params, $this::$cal_params) as $p) {
            $this->data[$p] = 0; // 初期値は0
        }
    }
    // アクセッサ
    public function __call($name, $arguments) {
//var_dump($name, $arguments);
        // タイプのチェック
        if (0 === strncmp($name, 'get', 3)) {
            $type = 'get';
            if (0 !== count($arguments)) {
                throw new \Exception("getなのにパラメタの数がオカシイ！！");
            }
        } else if (0 === strncmp($name, 'set', 3)) {
            $type = 'set';
            // $argumentsの確認
            if (1 !== count($arguments)) {
                throw new \Exception("setなのにパラメタの数がオカシイ！！");
            }
            if (false === is_int($arguments[0])) {
                throw new \Exception("setはintじゃないとヤダ！！: {$arguments[0]}");
            }
        } else {
            throw new \Exception("{$name}のメソッド名はオカシイ！！");
        }
        $param = strtolower(substr($name, 3));
//var_dump($type, $param);

        // パラメタ名のチェック
        if (false === isset($this->data[$param])) {
            throw new \Exception("{$param}なんてパラメタ、は、ない！！");
        }
        
        // XXX 以降、正常系の処理
        if ('get' === $type) {
            return $this->data[$param];
        }
        // else // setの時
        $this->data[$param] = $arguments[0];
    }

//
private $data = [];
//
private static $params = [
    //
    'max_hp',
    'max_mp',
    // 能力値
    'str',
    'dex',
    'int',
    'con',
];
private static $cal_params = [
    // 判定値
    'hit', // 命中値
    'attack', // 攻撃力
    'dodge', // 回避値
    'defence', // 防御力
];

}
