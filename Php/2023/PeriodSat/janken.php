<?php  // janken.php
declare(strict_types=1);

// セッションを使う
ob_start();
session_start();

if (isset($_SESSION['janken']) === true) {
    echo "{$_SESSION['janken']['勝ち']}勝
          {$_SESSION['janken']['負け']}敗
          {$_SESSION['janken']['引き分け']}引き分け <br>\n";
}
?>
<form action="./janken_judge.php" method="POST">
<label><input type="radio" name="jan" value="0">グー</label>
<label><input type="radio" name="jan" value="1">チョキ</label>
<label><input type="radio" name="jan" value="2">パー</label>
<br>
<button>じゃんけんをする</button>
</form>
