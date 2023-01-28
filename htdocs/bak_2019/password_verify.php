<?php  // password_verify
//
$pw = (string)@$_POST['pw'];
$pw_h = (string)@$_POST['pw_h'];
if ('' !== $pw) {
    $r = password_verify($pw, $pw_h);
	if (true === $r) {
		echo "一致しました！！<br>\n";
	} else {
		echo "不一致です orz<br>\n";
	}
}
?>
<form action="./password_verify.php" method="POST">
パスワード: <input name="pw"><br>
ハッシュ: <input name="pw_h"><br>
<button>チェックする</button>
</form>
