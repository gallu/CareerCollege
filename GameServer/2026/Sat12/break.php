<?php  // break.php

$mons = [
	"name" => "スライム",
	"HP" => 20,
	"MaxHP" => 20,
];

for ($i = 0; $i < 5; ++$i) {
	$damage = random_int(1, 6);
	$mons["HP"] -= $damage;
	echo "HP: {$mons["HP"]}/{$mons["MaxHP"]} <br>";
	
	if ($mons["HP"] <= 0) {
		echo "倒した!!!<br>";
		break;
	}	
}

echo "fin.";
