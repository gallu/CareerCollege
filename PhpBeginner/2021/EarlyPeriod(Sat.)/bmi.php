<?php   // bmi.php
//  https://dev2.m-fr.net/アカウント名/bmi.php
require_once( __DIR__ . '/bmi_init.php' );

//var_dump( $_SESSION );

// エラーフラグの受け取り
$error_flg = $_SESSION['error_flg'] ?? false;
unset( $_SESSION['error_flg'] );
//var_dump($error_flg);

//
ob_end_flush();
?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>BMI計算</title>
</head>
<body>
<h1>BMI計算</h1>
<?php
if (true === $error_flg) {
    echo '<span style="color: #f00;">体重または身長が未入力でした！！！</span><br>';
}
?>
<form action="./bmi_cal.php" method="POST">
お名前:<input  name="name"  value="<?php echo h($_SESSION['name'] ?? ''); ?>"><br>
身長:<input   name="height"  value="<?php echo h($_SESSION['height'] ?? ''); ?>">cm<br>
体重:<input   name="weight"  value="<?php echo h($_SESSION['weight'] ?? ''); ?>">kg<br>
<button>計算する</button>
</form>

</body>
</html>