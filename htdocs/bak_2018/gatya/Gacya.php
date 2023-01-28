<?php  // Gacya.php

require_once('./DB.php');

class Gacya {
    //
    static public function getCard($gacha_type) {
// XXX ここからキャッシュ対象
// $param, $totalをキャッシュする
        //
        $dbh = DB::getHandle();
        // がちゃtypeのカード一覧を取得
        $sql = 'SELECT * FROM gachas WHERE gacha_type = :gacha_type ;';
        $pre = $dbh->prepare($sql);
        //
        $pre->bindValue(':gacha_type', $gacha_type);
        //
        $r = $pre->execute();
        $list = $pre->fetchAll(); // XXX チェック未実装

        // paramを作る
        $param = [];
        foreach($list as $datum) {
            $param[ $datum['card_id'] ] = $datum['probability'];
        }

        // 「合計数」を把握
        $total = 0;
        foreach($param as $card_id => $num) {
            $total += $num;
        }
// XXX ここまでキャッシュ対象

        // 乱数を生成
        $key = mt_rand(0, $total - 1);
//var_dump($key);

        // 「どれにヒットするか」を判定
        $before = 0;
        foreach($param as $card_id => $num) {
            $before += $num;
            if ($key < $before) {
                return $card_id;
            }
        }
        // else
        return -1;
    }
}
