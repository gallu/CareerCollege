<?php  // UserCards.php

class UserCards {
    //
    public static function save($user_id, $card_id) {
        // DBハンドルを取得する
        $dbh = DB::getHandle();
        //
        $sql = 'INSERT INTO user_cards(user_id, card_id) VALUES (:user_id, :card_id);';
        $pre = $dbh->prepare($sql);

        // プレースホルダへの値のbind
        $pre->bindValue(':user_id', $user_id);
        $pre->bindValue(':card_id', $card_id);

        // SQLの実行
        $r = $pre->execute();
        return $r;
    }

}

