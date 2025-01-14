<?php  // Q20.php

/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: Hoge1
プロパティ: なし
メソッド: なし

Hoge1クラスのインスタンスを作成、var_dumpで出力しなさい。
 */
class Hoge1 {
}
$obj = new Hoge1();
var_dump($obj);

/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: Foo1
	継承元クラス: Hoge1
プロパティ: なし
メソッド: なし

Foo1クラスのインスタンスを作成、var_dumpで出力しなさい。
 */
class Foo1 extends Hoge1 {
}
$obj = new Foo1();
var_dump($obj);

/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

インタフェース名: Bar1
プロパティ: なし
 */
interface Bar1 {
}

/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: Piyo1
	継承インタフェース名: Bar1
プロパティ: なし
 */
class Piyo1 implements Bar1 {
}

/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

トレイト名: Buu1
プロパティ: なし
メソッド: なし
 */
trait Buu1 {
}

/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: Hogera1
	使うトレイト名: Buu1	
プロパティ: なし
メソッド: なし
 */
class Hogera1 {
	use Buu1;
}





