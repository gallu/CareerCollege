<?php  // date2.php
//
$t = time();
echo date(DATE_ATOM, $t) , "<br>";
$t += 60 * 60; // 1時間後
echo date(DATE_ATOM, $t) , "<br>";

// あんまりやらない
$dobj = new DateTime();
echo $dobj->format(DATE_ATOM), "<br>";
$dobj->setTimestamp($dobj->getTimestamp() + (60 * 60));
echo $dobj->format(DATE_ATOM), "<br>";

// こっちで書く
$dobj = new DateTime();
echo $dobj->format(DATE_ATOM), "<br>";
$dobj->add(new DateInterval("PT1H"));
echo $dobj->format(DATE_ATOM), "<br>";

/* --------------------------- */
$dobj = new DateTime("2023-01-31T00:00:00+0900");
echo $dobj->format("Y-m"), "<br>";
$dobj->add(new DateInterval("P1M"));
echo $dobj->format("Y-m"), "<br>";

//
$t = time();
echo date(DATE_ATOM, $t) , "<br>";
$t += 60 * 60　* 24 * 30; // 一か月後(が定められない)
echo date(DATE_ATOM, $t) , "<br>";






