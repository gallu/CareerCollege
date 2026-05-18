<?php   // php85.php

// 関数の戻り値が重要であり、 その値を使うべきことを示すアトリビュートとして、 NoDiscard が追加されました
#[\NoDiscard]
function concat(string $a, string $b): string {
     return $a . $b;
}
concat("a", "b"); // Warning: The return value of function concat() should either be used or intentionally ignored by casting it as (void) in



