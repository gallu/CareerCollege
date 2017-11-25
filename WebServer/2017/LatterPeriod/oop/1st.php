<pre>
<?php
// 1st.php
class  hoge   {
	// 関数(メソッド)
	public function test() {
		echo "hoge#test\n";
		echo $this->data , "\n";
	}
// 変数(プロパティ)
public $data;
}
//
$obj  =  new  hoge();
$obj->data = 'data';
var_dump( $obj );
$obj->test();
