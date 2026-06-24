<?php  // date6.php

$dobj = new DateTime();
$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>\n";

$dobj = new DateTime("+3 days");
$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>\n";

$dobj = new DateTime("+2 weeks");
$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>\n";

// これはやっちゃダメ！！
$dobj = new DateTime("+1 month");
$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>\n";

$dobj = new DateTime("+1 month 2026-05-10");
$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>\n";

$dobj = new DateTime("+1 month 2026-01-31");
$ds = $dobj->format(DATE_ATOM);
echo "{$ds} <br>\n";
