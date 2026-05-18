<?php  // entity4.php

class HogeEntity {
    public function __construct(
        public int $id,
        public string $name {
            get {
                return 'name is ' . $this->name;
            }
            set {
                $this->name = trim($value);
            }
        }
    ){}
}

$obj = new HogeEntity(123, '   name D   ');
var_dump($obj->id, $obj->name);
