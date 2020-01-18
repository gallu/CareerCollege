<?php  // DnD_1.php
require_once('./DnD_util.php');

//
$param = [];
$param['str'] = dice('3d6');
$param['dex'] = dice('3d6');
$param['int'] = dice('3d6');
$param['wiz'] = dice('3d6');
$param['con'] = dice('3d6');
$param['chr'] = dice('3d6');
//var_dump($param);

//
$_SESSION['param'] = $param;

?><html>
<body>
<a href="./DnD_1.php">振りなおす</a><br>
STR: <?php echo $param['str']; ?>（<?php echo correction($param['str']); ?>）<br>
DEX: <?php echo $param['dex']; ?>（<?php echo correction($param['dex']); ?>）<br>
INT: <?php echo $param['int']; ?>（<?php echo correction($param['int']); ?>）<br>
WIZ: <?php echo $param['wiz']; ?>（<?php echo correction($param['wiz']); ?>）<br>
CON: <?php echo $param['con']; ?>（<?php echo correction($param['con']); ?>）<br>
CHR: <?php echo $param['chr']; ?>（<?php echo correction($param['chr']); ?>）<br>
<a href="./DnD_2.php?job=f">戦士</a>　
<a href="./DnD_2.php?job=p">僧侶</a>　
<a href="./DnD_2.php?job=t">盗賊</a>　
<a href="./DnD_2.php?job=m">魔法使い</a>　
<a href="./DnD_2.php?job=e">エルフ</a>　
<a href="./DnD_2.php?job=d">ドワーフ</a>　
<a href="./DnD_2.php?job=h">ハーフリンク</a>
</body>
</html>













