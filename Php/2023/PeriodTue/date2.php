<?php  // date2.php

// 1時間後
$t = time();
echo date(DATE_ATOM, $t), "<br>\n";
$t += 60 * 60;
echo date(DATE_ATOM, $t), "<br>\n";

// あんまりやらない
$dobj = new DateTime();
echo $dobj->format(DATE_ATOM) , "<br>\n";
$dobj->setTimestamp( $dobj->getTimestamp() + (60 * 60) );
echo $dobj->format(DATE_ATOM) , "<br>\n";

// ふつう、こっち
$dobj = new DateTime();
echo $dobj->format(DATE_ATOM) , "<br>\n";
$dobj->add(new DateInterval("PT1H"));
echo $dobj->format(DATE_ATOM) , "<br>\n";

/* ---------------------- */
// 一か月後、は「やっちゃダメ！！」
$dobj = new DateTime("2023-01-31 17:28:00+0900");
echo $dobj->format(DATE_ATOM) , "<br>\n";
echo $dobj->format("Y-m") , "<br>\n";
$dobj->add(new DateInterval("P1M"));
echo $dobj->format(DATE_ATOM) , "<br>\n";
echo $dobj->format("Y-m") , "<br>\n";

//
$t = time();
echo date(DATE_ATOM, $t), "<br>\n";
$t += 86400; // XXX 「一か月」の秒が定義できない
echo date(DATE_ATOM, $t), "<br>\n";
