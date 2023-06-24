<?php  // janken.php
// セッションを使う
ob_start();
session_start();

if (isset($_SESSION["janken"])) {
    echo "{$_SESSION["janken"]["win"]}勝
         　{$_SESSION["janken"]["lose"]}負
         　{$_SESSION["janken"]["draw"]}引き分け";
    echo "<br>";
}

?>
<form action="./janken_judge.php" method="POST">
<label><input type="radio" name="gya" value="0">グー</label>
<label><input type="radio" name="gya" value="1">チョキ</label>
<label><input type="radio" name="gya" value="2">パー</label>
<br>
<button>じゃんけんをする</button>
</form>
