<?php  // card_list.php

// 認可(ユーザの特定)
require_once('./auth.php');
//var_dump($user);

// 所持カードの一覧を把握
$sql = '
SELECT user_card.card_id, cards.card_name, count(*) as num
  FROM user_card
       LEFT JOIN cards ON cards.card_id = user_card.card_id
 WHERE user_id = :user_id
 GROUP BY card_id
 ORDER BY card_id
;';
$pre = $dbh->prepare($sql);
// 値をbind
$pre->bindValue(':user_id', $user['user_id']);
// SQLを実行
$r = $pre->execute();
// カードを把握
$card_list = $pre->fetchAll();
//var_dump($card_list);

// 出力
echo "<table>
<tr>
  <th>
  <th>カード名
  <th>枚数\n";
//
$token_e = rawurlencode($token);
foreach($card_list as $v) {
    $card_id_e = rawurlencode($v['card_id']);
    echo "<tr>\n";
    echo "<td><a href='./card_detail.php?card_id={$card_id_e}&token={$token_e}'>＊</a>";
    echo "<td>{$v['card_name']}\n";
    echo "<td>{$v['num']}";
}  
//
echo "</table>";





