<?php  // entity1.php

class HogeEntity {
    public function __construct(
        private int $id,
        private string $name,
    ){}

    public function getId(): int {
        return $this->id;
    }
    public function geName(): string {
        return $this->name;
    }
}

$obj = new HogeEntity(12, 'name A');
var_dump( $obj->getId(), $obj->geName() );
