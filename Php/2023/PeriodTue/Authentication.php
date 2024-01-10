<?php  // Authentication.php
declare(strict_types=1);
require_once __DIR__ . '/dbh.php';

/**
 * 認証処理をつかさどるクラス
 */
class Authentication {
    public const ERROR_NUM = 5; // ログインロックがかかるまでのパスワードエラー回数
    public const LOCK_TIME = 120; // ログインロックの時間(単位:秒)

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

        // ログインロックの確認
        if (null !== $datum["lock_time"]) {
            $now = time();
            $lock_time = strtotime($datum["lock_time"]);
// var_dump($now, $lock_time);
// var_dump($datum["lock_time"]);
// var_dump( strtotime($datum["lock_time"]) );
// var_dump( time() );

            // まだロック中か？
            if ($now < $lock_time) {
                // ロック中なのでまだログインさせない
                var_dump("locking");
                return null;
            }
            // else
            // ログインロックを外す
            // $datum["error_count"] = 0; // XXX 厳しい目にしておく
            $datum["lock_time"] = null;
            $this->updateUser($datum);
        }

        // パスワードが正しいこと
        $r = password_verify($pw, $datum["password"]);
        if (false === $r) {
            // パスワード間違えた回数 ++;
            $datum["error_count"] ++;

            // パスワード間違えた回数 >= 一定回数以上
            if ($datum["error_count"] >= self::ERROR_NUM) {
                $datum["lock_time"] = date(DATE_ATOM, time() + self::LOCK_TIME);
            }

            // update(user);
            $this->updateUser($datum);

            // パスワードが違うよ？
            return null;
        }

        // [memo] ここまできたら認証OK

        // エラーカウントをリセット
        $datum["error_count"] = 0;
        $datum["lock_time"] = null;
        $this->updateUser($datum);

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

    //
    protected function updateUser($datum) {
        $dbh = DbHandle::get();

        $sql = 'UPDATE admin_users
                   SET error_count=:error_count
                     , lock_time=:lock_time
                     , updated_at=:updated_at
                 WHERE email=:email;';
        $pre = $dbh->prepare($sql);
        //
        $pre->bindValue(":error_count", $datum["error_count"], PDO::PARAM_INT);
        $pre->bindValue(":lock_time", $datum["lock_time"]);
        $pre->bindValue(":updated_at", date(DATE_ATOM), PDO::PARAM_STR);
        $pre->bindValue(":email", $datum["email"], PDO::PARAM_STR);
        $r = $pre->execute();
    }

}

/*
        
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

        
*/
