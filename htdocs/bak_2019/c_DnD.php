<?php  // c_DnD.php

class c_DnD {
/*
    public function getStr() {
        return $this->str;
    }
    protected function setStr($i) {
        $this->str = $i;
    }
*/
    public function __call($name, $arguments) {
        // もし先頭が"get"で始まる && そのパラメタが存在するなら
        $param = strtolower(substr($name, 3));
//var_dump($param);
        if ((0 === strncmp($name, 'get', 3))&&(isset($this::$params[$param]))) {
            // getterとみなして、値をreturnする
            return $this->datum[$param] ?? 0;
        }
        if ((0 === strncmp($name, 'set', 3))&&(isset($this::$params[$param]))) {
            // setterとみなして、値をsetする
            $this->datum[$param] = $arguments[0];
            return ;
        }
        // 上に該当しなかったら「いやだ」と言おう
        throw new \ErrorException("{$name}とか、ねぇよ！！！");
    }

//private:
private static $params = [
    'str' => true,
    'int' => true,
    'wiz' => true,
];
//
private $datum = []; // パラメタ全部入るところ

}
//
$obj = new c_DnD();
$obj->setStr( mt_rand(3, 18) );
$obj->setInt( mt_rand(3, 18) );
var_dump($obj->getStr());
var_dump($obj->getInt());
//$obj->hoge();
//$obj->getHoge();










