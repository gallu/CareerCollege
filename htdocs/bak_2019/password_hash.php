<?php  // password_hash.php
// 入力値受け取り
$pw = (string)@$_POST['pw'];
// ハッシュ作成
$t = microtime(true);
$pw_h = password_hash($pw, PASSWORD_DEFAULT, ['cost' => 15]);
var_dump(microtime(true) - $t);

// 出力
echo htmlspecialchars($pw, ENT_QUOTES);
echo " のhashは以下になります。<br>\n";
echo htmlspecialchars($pw_h, ENT_QUOTES), "<br><br>\n";
?>
<form action="./password_hash.php" method="POST">
パスワード: <input name="pw"><br>
<button>hash作成</button>
</form>
