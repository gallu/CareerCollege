<form action="./password_verify.php" method="post">
    パスワード:<input name="pw"><br>
    <button>パスワードチェック</button>
</form>
<?php  // password_verify.php

// もとになるパスワード
$raw_pass = 'password';
// これが本命
$saved_pass = password_hash($raw_pass, PASSWORD_DEFAULT);
var_dump($saved_pass);

//
if (true === isset($_POST['pw'])) {
    //
    echo '<br>' , $_POST['pw'] , '<br>';
    // 入力パスワードとhashedパスワードの比較
    $r = password_verify($_POST['pw'], $saved_pass);

    if (true === $r) {
        echo '正しいパスワードです！！';
    } else {
        echo '誤ったパスワードです orz';
    }
}
