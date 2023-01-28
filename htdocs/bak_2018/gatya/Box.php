<?php  // Box.php

//
require_once('./DB.php');

class Box {
    public function __construct($user_id, $box_type) {
        /* DBにアクセスして情報を取得 */
        // DBハンドルの取得
        $dbh = DB::getHandle();
//var_dump($dbh);
        // テーブルから「該当のユーザBOX情報」を取得
        $sql = 'SELECT * FROM user_box
                 WHERE user_id = :user_id 
                       AND
                       box_type = :box_type;';
        $pre = $dbh->prepare($sql);

        //
        $pre->bindValue(':user_id', $user_id);
        $pre->bindValue(':box_type', $box_type);
        //
        $r = $pre->execute(); // XXX チェック未実装
        $data = $pre->fetch(); // XXX チェック未実装
//var_dump($r, $data);

        // 「(ユーザ)データが存在しない」なら、作っておく
        if (false === $data) {
            //
            $sql = 'INSERT INTO user_box(user_id, box_type, data)
                         VALUES (:user_id, :box_type, :data);';
            $pre = $dbh->prepare($sql);
            //
            $pre->bindValue(':user_id', $user_id);
            $pre->bindValue(':box_type', $box_type);
            $pre->bindValue(':data', serialize([]));
            //
            $r = $pre->execute(); // XXX チェック未実装
            $data = ['user_id' => $user_id, 'box_type' =>$box_type
                   , 'data' => serialize([]) ];
        }
        //
        $this->data = $data;
    }

    // データの保存をする
    public function update()
    {
        // DBハンドルの取得
        $dbh = DB::getHandle();
        // SQLの作成
        $sql = 'UPDATE user_box SET data = :data
                 WHERE user_id = :user_id
                       AND
                       box_type = :box_type;';
        $pre = $dbh->prepare($sql);
        // バインド
        $pre->bindValue(':user_id', $this->data['user_id']);
        $pre->bindValue(':box_type', $this->data['box_type']);
        $pre->bindValue(':data', $this->data['data']);
        // 実行
        $r = $pre->execute();
        if (false === $r) {
            throw new Exception('SQLでエラー'); // XXX
        }
    }

    // リセット
    public function reset($update_flg = true) {
        // DBハンドルの取得
        $dbh = DB::getHandle();

        // 「box_typeで指定されたカード情報一式」を取得
        $sql = 'SELECT * FROM box WHERE box_type = :box_type';
        $pre = $dbh->prepare($sql);
        //
        $pre->bindValue(':box_type', $this->data['box_type']);
        //
        $r = $pre->execute(); // XXX チェック未実装
        $box_list = [];
        while($row = $pre->fetch()) {
//var_dump($row);
            $box_list[] = $row['card_id'];
        }
//var_dump($box_list);

        // 配列のシャッフル
        shuffle($box_list);
//var_dump($box_list);
        // dataを入れる
        $this->data['data'] = serialize($box_list);

        if (true === $update_flg) {
            // update
            $this->update();
        }

        //
        return $box_list;
    }

    // １枚引く
    public function drow() {
        // dataの中身をunserialize
        $box_list = unserialize( $this->data['data'] );
//var_dump($box_list);
        // dataの中身が「空」なら、reset()をcallする
        if ([] === $box_list) {
            $box_list = $this->reset(false); // Updateはしない
//var_dump($box_list);
        }
        // 1枚引く
	$card_id = array_pop($box_list);
//var_dump($card_id, $box_list);

        // 「引いた後の配列」をserialize
        $this->data['data'] = serialize($box_list);
        // update
        $this->update();
        //
        return $card_id;
    }

//
private $data;

}
