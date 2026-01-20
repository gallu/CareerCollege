<?php  // class11.php

class Item {
	private int $price;
	public function __construct(int $p) {
		$this->price = $p;
	}
	public function getPrice(): int {
		return $this->price;
	}
}

class Cart {
	private array $items = [];
	public function push(Item $i, int $num) {
		$this->items[] = [$i, $num];
	}
	
	public function getTotal(): int {
		$t = 0;
		foreach ($this->items as $v) {
			$i = $v[0];
			$num = $v[1];
			$t += $i->getPrice() * $num;
		}
		return $t;
	}
}

$cart = new Cart();
$cart->push( new Item(128), 1 );
$cart->push( new Item(198), 5 );
$cart->push( new Item(258), 3 );
var_dump($cart->getTotal());
