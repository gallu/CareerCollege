<pre>
<?php
// 5th.php
class  hoge  {
	// 静的メソッド
	static  public  function  test() {
		echo "hoge#test\n";
	}
}
//
hoge::test();

/*
class  hoge  {
	// コンストラクタ
	public  function  __construct() {
		echo "hoge#__construct\n";
	}
	// デストラクタ
	public  function  __destruct() {
		echo "hoge#__destruct\n";
	}
}
//
$obj  =  new  hoge();
*/
