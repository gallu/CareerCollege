<?php  // Q14.php
/*
以下のクラスを作成しなさい。
クラス名: Exam1
プロパティ: なし
定数: なし
メソッド: 
	メソッド名: test()
	引数: なし
	戻り値: なし
	処理
		echoで "test" と出力する

クラス名: Exam2
	継承元クラス: Exam1
プロパティ: なし
定数: なし
メソッド: なし

Exam2クラスのインスタンスを作成し、test()メソッドを呼び出せ。
 */

class Exam1 {
	public function test() {
		echo "test";
	}
}
class Exam2 extends Exam1 {
}

$obj = new Exam2();
$obj->test();



