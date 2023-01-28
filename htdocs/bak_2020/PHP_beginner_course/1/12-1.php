<?php
// カウンタ値の取得
if (false === isset($_COOKIE['counter'])) {
    $counter = 0;
} else {
    $counter = $_COOKIE['counter'];
}

// Cookieに新しい値を設定
// Cookieの有効期限を30日に設定
setcookie('counter', $counter + 1, time() + 60*60*24 * 30);

// 出力
if (0 == $counter) {
    echo "初めまして！";
} else {
    echo "いままでに";
    echo htmlspecialchars($counter, ENT_QUOTES, 'UTF-8');
    echo "回いらっしゃいましたね!";
}

