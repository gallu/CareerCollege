<?php  // serialize4.php
class Hoge {
	public function __construct(
		private int $num,
		private bool $flg,
	){}
	public function __serialize(): array {
		echo __METHOD__ , "<br>\n";
		return [
			"num" => $this->num,
			"flg" => $this->flg,
		];
	}
	public function __unserialize(array $data): void {
		echo __METHOD__ , "<br>\n";
		$this->num = $data["num"];
		$this->flg = $data["flg"];
	}
}
$obj = new Hoge(123, true);

echo "Trap 1<br>\n";
$ss = serialize($obj);

echo "Trap 2<br>\n";
$obj2 = unserialize($ss);
var_dump($obj2);
