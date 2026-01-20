<?php  // Q8.php
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Item // 商品
プロパティ:
	int型 attack // 意味合いは 攻撃力
	float型 discount // 意味合いは 割引率
また、メソッドとしてセッターとゲッターを作成しなさい。メソッド名は以下を想定します。
	setAttack() / getAttack()
	setDiscount() / getDiscount()
 */
class Item {
	private int $attack;
	private float $discount;

	public function setAttack(int $attack): void {
		$this->attack = $attack;
	}
	public function getAttack(): int {
		return $this->attack;
	}

	public function setDiscount(float $discount): void {
		$this->discount = $discount;
	}
	public function getDiscount(): float {
		$this->discount;
	}
}
