<?php  // date_6.php
$date = [
    "Tuesday, 02-Dec-2025 17:56:04 JST",
    // "Tue, 02 Dec 25 17:56:04 +09000", // ダメだった
    "Tue, 02 Dec 2025 17:56:04 +0900",
    "02/Dec/2025:18:25:37 +0900",
];

foreach ($date as $d) {
    $dobj = new DateTimeImmutable($d);
    $ds = $dobj->format(DATE_ATOM);
    echo "{$ds} <br>\n";
}
