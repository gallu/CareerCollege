<?php  // date_10.php

$dobj = new DateTimeImmutable();
// XXX あんまり使われない
// $t = $dobj->getTimestamp(); 
// $dobj->setTimestamp($t + (24*60*60) * 7);

$dobj2 = $dobj->add( new DateInterval("P7D") );

echo $dobj->format(DATE_ATOM) , "<br>\n";
echo $dobj2->format(DATE_ATOM) , "<br>\n";
