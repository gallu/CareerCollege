<?php  // continue.php

$mons = [
	"name" => "スライム",
	"HP" => 20,
	"MaxHP" => 20,
];

for ($i = 1; $i <= 10; ++$i) {
	echo "{$i}ターン目: ";
	
	$dodge = random_int(0, 99);
	if ($dodge <= 50) {
		echo "回避した!! <br>";
		continue;
	}
	
	$damage = random_int(1, 10);
	$mons["HP"] -= $damage;
	echo "HP: {$mons["HP"]}/{$mons["MaxHP"]} <br>";
	
	if ($mons["HP"] <= 0) {
		echo "倒した!!!<br>";
		break;
	}	
}

echo "fin.";

