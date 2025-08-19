<?php  // unique.php

// 「死んでも殺しても使っちゃだめ！ゼッタイ！」
$id = uniqid();
echo $id , "<br>\n";
$id = uniqid(more_entropy: true);
echo $id , "<br>\n";
$id = uniqid(prefix: (string)mt_rand(), more_entropy: true);
echo $id , "<br>\n";

// 「一意」なら、これがよく使われる
$uuid = rtrim(`uuidgen -r`);
echo $uuid , "<br>\n";

// 「推測困難」を求めるならこんな感じ(大体「16バイト以上」くらいが目安)
$id = bin2hex(random_bytes(20));
echo $id , "<br>\n";
