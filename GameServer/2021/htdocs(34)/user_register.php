<?php   // user_register.php
//
require_once( __DIR__ . '/../libs/dbh.php');

//var_dump($_POST);
//var_dump($_GET);

// 入力データを取得
$id = $_POST['id']  ??  '';
$pw = $_POST['pw']  ??  '';
$pw2 = $_POST['pw2']  ??  '';

// validate
if (    ('' === $id)
     or ('' === $pw)
     or ('' === $pw2)
   ) {
    // XXX
    echo "入力が足りねぇ";
    exit;
}
//
if ($pw !== $pw2) {
    echo "パスワード、（再）と一致してねぇ";
    exit;
}
//
if (128 < strlen($id)) {
    echo "すみませんIDは128文字以下でお願いいたします orz";
    exit;
}

// XXX ここまできたらvalidate　ok

// ユーザを登録
// プリペアドステートメントを用意
$sql = 'INSERT INTO users(user_id, password, creatad_at)
               VALUES(:user_id, :password, :creatad_at);';
$pre = $dbh->prepare($sql);
var_dump($pre);

// 値をバインド
$pre->bindValue(':user_id', $id, PDO::PARAM_STR);
$pre->bindValue(':password', $pw, PDO::PARAM_STR);
$pre->bindValue(':creatad_at', date('Y-m-d H:i:s'), PDO::PARAM_STR);

// SQLを実行
//$r = $pre->execute();
//var_dump($r);



// 完了画面の出力
