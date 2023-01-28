<?php
//
require_once('init_auth.php');

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
<h1>ユーザ追加</h1>
<form action="./user_add_fin.php" method="post">
ユーザID<input name="id"><br>
めも<input name="memo"><br>
パスワード<input name="pw"><br>
<input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
<br>
<button type="submit">ユーザ新規登録</button>
</form>
</body>
</html>
