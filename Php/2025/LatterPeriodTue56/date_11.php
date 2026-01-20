<?php  // date_11.php
// これはOK
$dobj = new DateTime("+1 day");
echo $dobj->format(DATE_ATOM) , "<br>\n";
// これもOK
$dobj = new DateTime("+1 week");
echo $dobj->format(DATE_ATOM) , "<br>\n";

// これは「だめ」
$dobj = new DateTime("+1 month");
echo $dobj->format(DATE_ATOM) , "<br>\n";
// これも基本「だめ」
$dobj = new DateTime("+1 year");
echo $dobj->format(DATE_ATOM) , "<br>\n";

//
$dobj = new DateTime("2025-01-31 +1 day");
echo $dobj->format(DATE_ATOM) , "<br>\n";
//
$dobj = new DateTime("2025-01-31 +1 month"); // 2025-03-03
echo $dobj->format(DATE_ATOM) , "<br>\n";
$dobj = new DateTime("2025-03-31 +1 month"); // 2025-05-01
echo $dobj->format(DATE_ATOM) , "<br>\n";

$dobj = new DateTime("2020-02-29 +1 year"); // 2021-03-01
echo $dobj->format(DATE_ATOM) , "<br>\n";

