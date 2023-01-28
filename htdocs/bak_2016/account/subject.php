<?php

// 認証付き
require_once('init_auth.php');

// 入金の一覧を作成
// 「準備された文」を用意する
$sql = 'SELECT * FROM subjects WHERE type=1 ORDER BY subject_id;';
$pre = $dbh->prepare($sql);

// プレースホルダに値をバインドする
// XXX 今回はなし

// SQLを実行する
$r = $pre->execute();
if (false == $r) {
    echo 'DBエラーです。';
    exit;
}

//
$payment_data = array();
while($row = $pre->fetch(PDO::FETCH_ASSOC)) {
    //
    $payment_data[] = $row;
}
//var_dump($payment_data);


// CSRFトークンを作ってセッションに保存
$csrf_token = create_csrf_token();

?><!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=1;">
<title>カフェショップ会計</title>
</head>

<body>
<h1>科目一覧</h1>

<h2>入金科目一覧</h2>
<table border="1">
  <tr>
    <th>科目名
<?php
foreach($payment_data as $datum) {
?>
  <tr>
    <td><?php echo $datum['subject_name'];?>
<?php
if (1 == $datum['activation_flg']) {
    echo "<td>現在有効
<form action='./subject_inactive.php' method='post'>
<input type='hidden' name='subject_id' value='{$datum['subject_id']}'>
<input type='hidden' name='csrf_token' value='{$csrf_token}'>
<button type='submit'>(無効化する)</button>
</form>";
} else {
    echo "<td>現在無効
<form action='./subject_active.php' method='post'>
<input type='hidden' name='subject_id' value='{$datum['subject_id']}'>
<input type='hidden' name='csrf_token' value='{$csrf_token}'>
<button type='submit'>(有効化する)</button>
</form>";
}

?>
    <td><a href="./subject.html" onClick="return confirm('削除？？？');">削除</a>
<?php
}
?>

</table>

<h2>入金科目追加</h2>
<form action="./subject_in_add.php" method="post">
  科目名:<input name="payment_subject"><br>
  <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
  <button type="submit">追加する</button>
</form>

<h2>出金科目一覧</h2>
<table border="1">
  <tr>
    <th>科目名
  <tr>
    <td>あれ
    <td><a href="./subject.html">無効化する</a>
    <td><a href="./subject.html" onClick="return confirm('削除？？？');">削除</a>
  <tr>
    <td>それ
    <td><a href="./subject.html">有効化する</a>
    <td><a href="./subject.html" onClick="return confirm('削除？？？');">削除</a>

</table>

<h2>出金科目追加</h2>
<form action="" method="post">
  科目名:<input name="withdrawal_subject"><br>
  <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
  <button type="submit">追加する</button>
</form>

</body>
</html>
