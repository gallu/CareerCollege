<?php  // date5.php

$t = time();
for ($i = 0; $i < 3; ++$i) {
    $ds = date(DATE_ATOM, $t);
    echo "{$ds} <br>\n";
    // 1日後にする
    $t += 86400; // 60*60*24
}
echo "<br>";

$dobj = new DateTime();
for ($i = 0; $i < 3; ++$i) {
    $ds = $dobj->format(DATE_ATOM);
    echo "{$ds} <br>\n";
    // 1日後にする
    $dobj->add(new DateInterval('P1D'));
}
echo "<br>";

$dobj = new DateTimeImmutable();
for ($i = 0; $i < 3; ++$i) {
    $ds = $dobj->format(DATE_ATOM);
    echo "{$ds} <br>\n";
    // 1日後にする
    $dobj = $dobj->add(new DateInterval('P1D'));
}

