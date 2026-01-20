<?php  // class10.php
// readonlyは試験範疇外

class Item {
	private int $price;
	public function __construct(int $p) {
		$this->price = $p;
	}
}
$item = new Item(128);
var_dump($item);

// 「やってはいけない」書き方
$item->__construct(512);
var_dump($item);


class Item2 {
	readonly public int $price;
	public function __construct(int $p) {
		$this->price = $p;
	}
}
$item2 = new Item2(198);
var_dump($item2);

// $item2->price = 298; // Cannot modify readonly property 
var_dump($item2->price);

// $item2->__construct(998); // Cannot modify readonly property 
