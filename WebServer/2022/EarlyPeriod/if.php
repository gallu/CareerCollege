<?php   // if.php
// https://dev2.m-fr.net/アカウント名/if.php

//
$i = random_int(1, 5);
//
if ($i >= 3) {
    echo "{$i} は３以上です<br>\n";
} else {
    echo "{$i} は３以下です<br>\n";
}

// PHP7までとPHP8以降で挙動が違う……
$i = 2;
if ($i == '2a') {
    echo "i は 2aです <br>\n";
} else {
    echo "i は 2aではありません <br>\n";
}

