<?php   // bmi.php
//
require_once('./bmi_init.php');

//var_dump($_SESSION);

// エラーフラグの取得と(セッションからの)消去
$error_invalid_value = $_SESSION['error_invalid_value'] ?? false;
unset($_SESSION['error_invalid_value']);

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
if (true === $error_invalid_value) {
    echo '<span style="color: #f00;">体重と身長はちゃんと入力してください!!</span><br>';
}
?>
<form  action="./bmi_cal.php"  method="POST">
お名前: <input name="name"   value="<?php  echo h($_SESSION['name'] ?? '');  ?>"><br>
身長:  <input  name="height"  value="<?php  echo h($_SESSION['height'] ?? '');  ?>">cm<br>
体重:  <input  name="weight"  value="<?php  echo h($_SESSION['weight'] ?? '');  ?>">kg<br>
<button>計算する</button>
</form>

</body>
</html>