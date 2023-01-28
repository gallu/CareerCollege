<?php // static_class_1st.php
class hoge {
    public function print() {
		echo "hoge print\n";
		echo $this->i, "\n";
	}
private $i = 100;
}
class staticHoge {
    static public function print() {
		echo "staticHoge print\n";
		echo staticHoge::$i, "\n";
		echo self::$i, "\n";
	}
static private $i = 100;
}
//
$obj = new hoge();
$obj->print();
//
staticHoge::print();








