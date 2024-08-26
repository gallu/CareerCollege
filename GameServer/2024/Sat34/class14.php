<?php  // class14.php
declare(strict_types=1);
/*
Weapon
    name
    price
    offense

Armor
    name
    price
    defense
*/
class Equipment {
    private string $name;
    private int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

class Weapon extends Equipment{
    private int $offense;

    public function __construct(string $name, int $price, int $offense) {
        parent::__construct($name, $price);
        $this->offense = $offense;
    }
}

class Armor extends Equipment{
    private int $defense;

    public function __construct(string $name, int $price, int $defense) {
        parent::__construct($name, $price);
        $this->defense = $defense;
    }
}
