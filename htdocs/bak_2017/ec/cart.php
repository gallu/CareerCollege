<?php
// cart.php

// 入力を受け取る
$id = (string)$_POST['id'] ?? ''; // 商品ID
$num = (int)abs($_POST['num'] ?? 0); // 数量

// 最低限のvalidate
if ('' === $id) {
    // XXX
    exit;
}
if ( (0 === $num) || (1000 < $num) ) {
    // XXX
    exit;
}

// 商品情報の取得(と、二番目のvalidate)
try {
    $book = new Books($id);
} catch(Exception $e) {
    // XXX 「商品が見つからない」エラー処理
    exit;
}

// cartクラスを取り出す
if (true === isset($_SESSION['cart'])) {
    $cart = unserialize($_SESSION['cart']);
} else {
    $cart = new Cart();
}

// cartクラスに商品を入れる
$cart->set($book, $num);

// cartクラスを保存しておく
$_SESSION['cart'] = serialize($cart);

// 「cartの中身一式」を表示する
$template_obj->アサイン('カゴの中身', $cart->getData());
// 合計金額を表示する
$template_obj->アサイン('合計金額', $cart->getTotal());
 

