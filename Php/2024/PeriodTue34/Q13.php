<?php  // Q13.php
/*
以下のクラスを作成しなさい。

クラス名: Exam1
プロパティ: private num_1 int型
プロパティ: private num_2 int型
定数: なし
メソッド: 
	コンストラクタ
	引数: int, int
	処理
		引数の値を、プロパティ num_1とnum_2 に代入する
		num_1とnum_2の値が、1未満または6を超える場合、例外を投げる( Exception )

	メソッド名: isHan()
	引数: なし
	戻り値: bool型
	処理
		プロパティ num_1 + num_2 の値が奇数ならtrue、偶数ならfalseを返す

インスタンスを作成して、メソッド isHan() を呼び出し、得られた値を、var_dump()で出力しなさい
 */
class Exam1 {
	private int $num_1;
	private int $num_2;

	public function __construct(int $i, int $j) {
		// 引数の値を、プロパティ num_1とnum_2 に代入する
		$this->num_1 = $i;
		$this->num_2 = $j;

		// num_1 とnum_2 の値が、1未満または6を超える場合
		if ($this->num_1 < 1 || $this->num_1 > 6 || $this->num_2 < 1 || $this->num_2 > 6) {
			// 例外を投げる( Exception )
			throw new Exception("エラーメッセージだよ");
		}
	}
	
	public function isHan() {
		// プロパティ num_1 + num_2 の値が奇数ならtrue、偶数ならfalseを返す
		$total = $this->num_1 + $this->num_2;

		if ($total % 2 === 1) {
			return true;
		} else {
			return false;
		}
		
		// return $total % 2 === 1;

		// return ($this->num_1 + $this->num_2) % 2 === 1;
	}
}

try {
	$obj = new Exam1(2, 8);
	$r = $obj->isHan();
	var_dump($r);
} catch(Exception $e) {
	echo $e->getMessage();
}

