<?php  // Authentication.php
declare(strict_types=1);
require_once __DIR__ . "/dbh.php";

class Authentication {
    public function login(string $email, string $pw): ?object {        
        // 入力されたemailでDBから情報を取得
        $dbh = DbHandle::get();
        // プリペアドステートメント（準備された文）を作成する
        $sql = 'SELECT * FROM admin_users WHERE email=:email;';
        $pre = $dbh->prepare($sql);
        // プレースホルダに値をバインドする
        $pre->bindValue(":email", $email, PDO::PARAM_STR);
        // SQLを実行する
        $r = $pre->execute();
        // データを取得する
        $datum = $pre->fetch();
        // var_dump($datum);
        // ユーザがそもそも存在しない
        if (false === $datum) {
            return null;
        }

        // パスワードが「正しい」かどうか
        if (false === password_verify($pw, $datum["password"])) {
            return null;
        }

        // 戻り値のインスタンスを作ってreturn
        return new class(admin_user_id: $datum["admin_user_id"], name: $datum["name"], email: $datum["email"]) {
            public function __construct(
                public readonly int $admin_user_id,
                public readonly string $name,
                public readonly string $email,
            ){
            }
        };
    }
}

/*
        // 入力されたemailでDBからユーザを取得する
        // ログインロックの確認
        if (ログインロック中) {
            return null;
        }
        // パスワードが「正しい」かどうか
        if (パスワードエラー) {
            エラーカウント++
            if (エラーカウント >= 一定回数) {
                ログインロック
            }
            update();
            return null;
        }
        
        // 認証OKなら
        エラーカウント = 0
        update
        // 戻り値のインスタンスを作ってreturn
*/




