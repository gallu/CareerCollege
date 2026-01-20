<?php  // Q12.php
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Book // 書籍
	プロパティ:
	string型 format // 意味合いは フォーマット：ハードカバー、ペーパーバック、電子書籍など

また、コンストラクタを作成しなさい。
コンストラクタは、引数を1つとし、引数をプロパティに代入しなさい。

また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
	getFormat()
*/
class Book {
	private string $format;
	public function __construct(string $format) {
		$this->format = $format;
	}
	public function getFormat(): string {
		return $this->format;
	}
}
