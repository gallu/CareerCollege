<?php   // common.php

/**
 * 共通ものを入れるファイル
 */

/**
 * XSS対策
 */
function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}
