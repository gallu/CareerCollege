<?php  // date8.php

// 前提
$dobj = new DateTimeImmutable();
echo $dobj->format("Y-m-d"), "<br>\n";

$dobj2 = $dobj->add( new DateInterval("P1D") );
echo $dobj->format("Y-m-d"), "<br>\n";
echo $dobj2->format("Y-m-d"), "<br>\n";
echo "<br>\n";

//
$dobj = new DateTimeImmutable();
for ($i = 0; $i < 7; ++$i) {
    // Immutableである意味はあまりない、けど
    $dobj = $dobj->add( new DateInterval("P1D") );
    echo $dobj->format("Y-m-d"), "<br>\n";
}

