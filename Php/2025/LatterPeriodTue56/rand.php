<?php  // rand.php

// セキュリティの文脈なら「絶対に使うな」
$r = rand(0, 999);
echo "{$r} <br>\n";
$r = mt_rand(0, 999);
echo "{$r} <br>\n";

// 使うならこっち
$r = random_int(0, 999);
echo "{$r} <br>\n";
