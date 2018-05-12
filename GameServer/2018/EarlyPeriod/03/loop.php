<?php
// loop.php
// http://dev2.m-fr.net/XXXXX/loop.php

// for 10‰ñŒJ‚è•Ô‚µ
for($i = 0; $i < 10; ++$i) {
    echo $i, "<br>\n";
}
// 1`10‚Ü‚Å‚ðƒJƒEƒ“ƒg
for($i = 1; $i <= 10; ++$i) {
    echo $i, "<br>\n";
}

// while 10‰ñŒJ‚è•Ô‚µ
$i = 0;
while($i < 10) {
    echo $i, "<br>\n";
    ++$i;
}

// do-wihle 10‰ñŒJ‚è•Ô‚µ
$i = 0;
do {
    echo $i, "<br>\n";
    ++$i;
} while($i < 10);

// while‚Ædo-while‚Ìˆá‚¢
while(false) {
    echo "in while <br>\n"; // ’Ê‚ç‚È‚¢
}
//
do {
    echo "in do-while <br>\n"; // ’Ê‚é
} while(false);

