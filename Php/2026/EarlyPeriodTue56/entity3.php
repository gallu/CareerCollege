<?php  // entity3.php

class HogeEntity {
    public function __construct(
        public protected(set) int $id,
        public protected(set) string $name,
    ){}
}

$obj = new HogeEntity(56, 'name C');
var_dump( $obj->id, $obj->name );

// $obj->id = 123; // Cannot modify protected(set) property
