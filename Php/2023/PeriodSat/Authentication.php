<?php  // Authentication.php
declare(strict_types=1);
require_once __DIR__ . "/dbh.php";

class Authentication {
    public function login(string $email, string $pw): ?object {
        //　ユーザ情報の把握
        $dbh = DbHandle::get();
        // プリペアドステートメント(準備された文)を作成
        $sql = 'SELECT * FROM admin_users WHERE email=:email';
        $pre = $dbh->prepare($sql);
        // プレースホルダに値をバインド
        $pre->bindValue(":email", $email, PDO::PARAM_STR);
        // SQLを実行
        $r = $pre->execute();
        // 読んできたデータをゲトる
        $datum = $pre->fetch();
        // var_dump($datum);
        // ユーザがそもそもいないよ
        if (false === $datum) {
            return null;
        }

        // ログインロックの確認
        // XXXXXXX ここから
        if (null !== admin_users.login_lock) {
            // ロックタイム中なら
            if (admin_users.login_lock > time()) {
                return null;
            }
            //　一度ロックを外す
            admin_users.login_lock = null;
            update()
        }


        // パスワードの確認
        if (false === password_verify($pw, $datum["password"])) {
            //　エラーカウントをインクリメント
            $datum["error_count"] ++;
// var_dump($datum);

            // エラーカウントが一定回数以上ならロック
            if ($datum["error_count"] >= 5) {
                $datum["lock_time"] = date(DATE_ATOM, time() + 120);
            }

            // update
            $this->userUpdate($datum);
            
            return null;
        }

        // [memo]ここまできたら認証OK
        $datum["error_count"] = 0;
        $datum["lock_time"] = null;
        $this->userUpdate($datum);

        // ユーザデータを返す
        return new class(admin_user_id: $datum["admin_user_id"], name: $datum["name"], email: $datum["email"]) {
            public function __construct(
                public readonly int $admin_user_id,
                public readonly string $name,
                public readonly string $email,
            ) {
            }
        };
    }

    //
    protected function userUpdate($datum) {
        //
        $dbh = DbHandle::get();

        // update
        // プリペアドステートメント(準備された文)を作成
        $sql = 'UPDATE admin_users SET error_count=:error_count, lock_time=:lock_time WHERE email=:email';
        $pre = $dbh->prepare($sql);
        // プレースホルダに値をバインド
        $pre->bindValue(":email", $datum["email"], PDO::PARAM_STR);
        $pre->bindValue(":error_count", $datum["error_count"], PDO::PARAM_STR);
        $pre->bindValue(":lock_time", $datum["lock_time"]);
        // SQLを実行
        $r = $pre->execute();
    }

}
