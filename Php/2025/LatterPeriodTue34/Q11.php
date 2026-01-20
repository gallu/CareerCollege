<?php  // Q11.php
// セッターとは「プロパティに引数のデータを代入する」メソッド
// ゲッターとは「プロパティの値をreturnする」メソッド

/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Character // キャラクター
プロパティ:
	int型 hp // 意味合いは ヒットポイント
また、メソッドとしてセッターとゲッターを作成しなさい。メソッド名は以下を想定します。
	setHp() / getHp()
*/
class Character {
	private int $hp;

	public function setHp(int $hp): void {
		$this->hp = $hp;
	}

	public function getHp(): int {
		return $this->hp;
	}
}

/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Item // 商品
プロパティ:
	string型 language // 意味合いは 言語
また、メソッドとしてセッターとゲッターを作成しなさい。メソッド名は以下を想定します。
	setLanguage() / getLanguage()
*/
class Item {
	private string $language;

	public function setLanguage(string $lan): void {
		$this->language = $lan;
	}
	public function getLanguage(): string {
		return $this->language;
	}
}

