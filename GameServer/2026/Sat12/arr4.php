<?php  // arr4.php
echo "<pre>";

$mons = [
	"name" => "スライム",
	"HP" => 20,
];

$num = random_int(2, 4);

//
$monsParty = [];
for ($i = 0; $i < $num; ++$i) {
	$monsParty[] = $mons;
}
print_r($monsParty);

for ($i = 0; $i < 5; ++$i) {
	$target = random_int(0, $num-1);
	$damage = random_int(1, 5);
	echo "{$target} に攻撃!! {$damage}ダメージ!! \n";
	// ダメージを与える
	$monsParty[$target]["HP"] -= $damage;
	// print_r($monsParty);
	foreach ($monsParty as $k => $m) {
		echo "{$m['name']} : {$m['HP']} \n";
	}
	echo "\n";
}
