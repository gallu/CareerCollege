<?php  // PC.php

class Character {
    private string $name; // キャラクタ名

    private int $str; // 筋力
    private int $dex; // 敏捷
    private int $con; // 耐久力

    private int $hp;
    private int $max_hp;
}

class PC extends Character {
    private int $所持金;
}

class Enemy extends Character {
    private string $dropするお金; // 5d10+100
}
