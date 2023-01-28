<?php  // class.php
//
class Hoge {
	// 関数(メソッド)
	public function test() {
		echo "test<br>\n";
	}
	//
	public function test2($i) {
		$this->val = $i;
		echo $this->val, "<br>\n";
	}

// 変数(プロパティ)
public $p_val; // プロパティでpublicは(場所にもよるが)あんまり好まれない
private $val;
}
//
$h_obj = new Hoge();
var_dump($h_obj);
//
$h_obj->test();
//
$h_obj->p_val = 'string';
echo $h_obj->p_val , "<br>\n";
// XXX private
//$h_obj->val = 'string';
//echo $h_obj->val , "<br>\n";

//
$h_obj->test2(100);








