<?php
//
require_once('init_auth.php');

// ユーザの一覧作成
// 「準備された文」を用意
$sql = 'SELECT * FROM users ORDER BY user_id;';
$pre = $dbh->prepare($sql);

// プレースホルダに値をバインド
// XXX 今回は値なし

// SQL文を実行
$r = $pre->execute();

// データを一式取得
$user_list = array();
while($row = $pre->fetch(PDO::FETCH_ASSOC)) {
    // パスワードは削る
    unset($row['password']);
    //
    $user_list[] = $row;
}
//var_dump($user_list);

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
<h1>ユーザ一覧</h1>
<a href="./user_add.php">ユーザ追加</a><br>
<br>

<table border="1">
  <tr>
    <th>ユーザID
    <th>めも
    <th>
    <th>

<?php
    foreach($user_list as $user) {
?>
  <tr>
    <td><?php echo $user['user_id']; ?>
    <td><?php echo $user['memo']; ?>

    <td><form action="./user_change_password.php" method="post">
          パスワード<br><input name="pw"><br>
          <input type="hidden" name="id" value="<?php echo $user['user_id']; ?>">
          <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
          <button type="submit">パスワード変更</button>
        </form>


    <td><a href="./user_list.html" onClick="return confirm('削除する？　マジで？')">削除</a>
<?php
    }
?>


</table>

</body>
</html>

