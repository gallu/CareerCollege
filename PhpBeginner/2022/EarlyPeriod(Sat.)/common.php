<?php   // common.php
/**
 * 共通関数用ファイル
 */

// XSS対策
function h(string $s) : string {
    return htmlspecialchars($s, ENT_QUOTES);
}
