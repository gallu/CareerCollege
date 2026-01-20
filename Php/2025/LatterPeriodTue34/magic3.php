<?php  // magic3.php
class Entity {
	private array $data;
	public function __construct(array $data) {
		$this->data = $data;
	}
	public function __set(string $name, mixed $value): void {
		if (false === isset($this->data[$name])) {
			echo "set)ないよ？<br>";
			return;
		}
		$this->data[$name] = $value;
	}
	public function __get(string $name): mixed {
		if (false === isset($this->data[$name])) {
			echo "get)ないよ？<br>";
			return null;
		}
		return $this->data[$name];
	}
}
//
$obj = new Entity([
	"name" => "hoge",
	"age" => 123,
]);
var_dump($obj->name, $obj->age);
$obj->name = "foo";
var_dump($obj->name);
var_dump($obj->tel);

