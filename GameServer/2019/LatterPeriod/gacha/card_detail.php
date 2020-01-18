<?php  // card_detail.php

// 認可(ユーザの特定)
require_once('./auth.php');
//var_dump($user);

//
$card_id = (string)($_GET['card_id'] ?? '');
if ('' === $card_id) {
    // XXX
    echo "空とかありえない";
    exit;
}

// カード情報を取得
$sql = 'SELECT * FROM cards WHERE card_id = :card_id;';
$pre = $dbh->prepare($sql);
// 値をbind
$pre->bindValue(':card_id', $card_id);
// SQLを実行
$r = $pre->execute();
// カードを把握
$card = $pre->fetch();
//var_dump($card);

?>
カード名：<?php echo $card['card_name']; ?><br>
<?php echo $card['card_offense']; ?> / <?php echo $card['card_defense']; ?><br>
<pre>
<?php echo $card['flavor_text']; ?>
</pre>










