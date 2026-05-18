<?php  // entity2.php

readonly class HogeEntity {
    public function __construct(
        public int $id,
        public string $name,
    ){}
}

$obj = new HogeEntity(34, 'name B');
var_dump( $obj->id, $obj->name );

// $obj->id = 123; // Cannot modify readonly property
