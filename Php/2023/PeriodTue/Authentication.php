<?php  // Authentication.php
declare(strict_types=1);
require_once __DIR__ . '/dbh.php';

/**
 * 認証処理をつかさどるクラス
 */
class Authentication {
    // ログイン
    // 戻り値はユーザ情報(無名クラス)
    public function login(string $email, string $pw): object|null {
        /* ログイン */
        $dbh = DbHandle::get();
        // emailが存在していること
        $sql = 'SELECT * FROM admin_users WHERE email=:email;';
        $pre = $dbh->prepare($sql);
        //
        $pre->bindValue(":email", $email, PDO::PARAM_STR);
        $r = $pre->execute();
        $datum = $pre->fetch();
// var_dump($datum);
        if (false === $datum) {
            // そんなユーザは存在しない
            return null;
        }

        // パスワードが正しいこと
        $r = password_verify($pw, $datum["password"]);
        if (false === $r) {
            // パスワードが違うよ？
            return null;
        }
        
        // OKだったらユーザ情報を返す
        // XXX readonlyは使えるのがPHP 8.1以降
        return new class($datum) {
            public readonly int $admin_user_id;
            public readonly string $name;
            public readonly string $email;

            public function __construct(array $datum) {
                $this->admin_user_id = $datum['admin_user_id'];
                $this->name = $datum['name'];
                $this->email = $datum['email'];
            }
        };
    }
}

/*
    public function login(string $email, string $pw): object|null {
        // emailが存在していること
        if (NG) {
            return null;
        }
        
        // ログインロックの確認
        if (ログインロック中) {
            if (一定時間経過) {
                ログインロックを外す
                update(user)
            } else {
                // ロック中なのでまだログインさせない
                return null;
            }
        }

        // パスワードが正しいこと
        if (NG) {
            パスワード間違えた回数 ++;
            // update(user);
            if (パスワード間違えた回数 >= 一定回数以上) {
                ログインロック
                ユーザにemail
                // update(user)
            }
            update(user);
            return null;
        }
        
        // OKだったらユーザ情報を返す
        パスワード間違えた回数をリセットして update(user)
        return user;
    }
}
*/
