<?php  // DnD_2.php

require_once('./DnD_util.php');

$param = $_SESSION['param'];


$job = $_GET['job'] ?? '';
//var_dump($job);

// HPの決定
switch($job) {
    case 'f': // 戦士
    case 'd': // ドワーフ
        $hd = '1d8';
        break;
    case 'p': // 僧侶
    case 'e': // エルフ
    case 'h': // ハーフリンク
        $hd = '1d6';
        break;
    case 't': // 盗賊
    case 'm': // 魔法使い
        $hd = '1d4';
        break;
    default: 
        $hd = '';
        break;
}
// 一応エラー処理
if ('' === $hd) {
    header('Location: ./DnD_1.php');
    return ;
}
//
$hp = dice($hd) + correction($param['con']);
if (1 > $hp) {
    $hp = 1;
}
//var_dump($hd, $hp);

//
$gold = dice('3d6') * 10;
//var_dump($gold);

//
$job_array = [
    'f' => '戦士',
    'p' => '僧侶',
    't' => '盗賊',
    'm' => '魔法使い',
    'e' => 'エルフ',
    'd' => 'ドワーフ',
    'h' => 'ハーフリンク',
];
?>
<html>
<body>
<a href="./DnD_1.php">振りなおす</a><br>
STR: <?php echo $param['str']; ?>（<?php echo correction($param['str']); ?>）<br>
DEX: <?php echo $param['dex']; ?>（<?php echo correction($param['dex']); ?>）<br>
INT: <?php echo $param['int']; ?>（<?php echo correction($param['int']); ?>）<br>
WIZ: <?php echo $param['wiz']; ?>（<?php echo correction($param['wiz']); ?>）<br>
CON: <?php echo $param['con']; ?>（<?php echo correction($param['con']); ?>）<br>
CHR: <?php echo $param['chr']; ?>（<?php echo correction($param['chr']); ?>）<br>
職業: <?php echo $job_array[$job]; ?><br>
HP: <?php echo $hp; ?><br>
Gold: <?php echo $gold; ?><br>

</body>
</html>











