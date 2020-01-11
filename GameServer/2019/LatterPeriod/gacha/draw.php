<?php  // draw.php

require_once('./auth.php');

// 「がちゃのパック」を把握する
$sql = 'SELECT * FROM gacha_detail WHERE gacha_id = :gacha_id;';
$pre = $dbh->prepare($sql);

// 値をbind
$pre->bindValue(':gacha_id', 1);

// SQLを実行
$r = $pre->execute();

// レコードを取得
$cards = [];
while($row = $pre->fetch()) {
    $cards[] = $row;
}
//var_dump($cards); exit;

$sum = 0;
foreach($cards as $c) {
    $sum += $c['probability'];
}

// がちゃを引く
$i = mt_rand(0, $sum - 1);
$val = null;
$p_base = 0;
foreach($cards as $c) {
    if ($p_base <= $i && $i < $p_base + $c['probability']) {
        $val = $c;
        break;
    }
    // else
    $p_base += $c['probability'];
}

//
//echo "({$val['card_id']}) を取得";
$sql = 'SELECT * FROM cards WHERE card_id = :card_id;';
$pre = $dbh->prepare($sql);

// 値をbind
$pre->bindValue(':card_id', $val['card_id']);

// SQLを実行
$r = $pre->execute();

// カードを把握
$card = $pre->fetch();
echo "{$card['card_name']}<br>";
echo "{$card['card_offense']}/{$card['card_defense']}<br>";
echo "{$card['flavor_text']}<br>";

// カードをユーザにaddする
$sql = 'INSERT INTO user_card(user_id, card_id, created_at)
          VALUES(:user_id, :card_id, :created_at);';
$pre = $dbh->prepare($sql);
// 値をbind
$pre->bindValue(':card_id', $val['card_id']);
$pre->bindValue(':user_id', $user['user_id']);
$pre->bindValue(':created_at', date('Y-m-d H:i:s'));
// SQLを実行
$r = $pre->execute();
var_dump($r);

// 「引いた後」の出力
//　XXX　省略

?><a href="./card_list.php?token=<?php echo rawurlencode($token); ?>">カード一覧</a>







