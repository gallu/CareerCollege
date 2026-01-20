<?php  // date_9.php

$dobj = new DateTime();
// XXX あんまり使われない
// $t = $dobj->getTimestamp(); 
// $dobj->setTimestamp($t + (24*60*60) * 7);

$dobj->add( new DateInterval("P7D") );

echo $dobj->format(DATE_ATOM);
