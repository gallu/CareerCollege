<?php  // date4.php

$dobj = new DateTime("now");
echo $dobj->format(DATE_ATOM), "<br>\n";

$dobj = new DateTime("noon");
echo $dobj->format(DATE_ATOM), "<br>\n";

$dobj = new DateTime("yesterday");
echo $dobj->format(DATE_ATOM), "<br>\n";

$dobj = new DateTime("yesterday noon");
echo $dobj->format(DATE_ATOM), "<br>\n";

$dobj = new DateTime("+3 days");
echo $dobj->format(DATE_ATOM), "<br>\n";
