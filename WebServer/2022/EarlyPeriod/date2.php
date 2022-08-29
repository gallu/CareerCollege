<?php   // date2.php
declare(strict_types=1);

//
$t = time();
echo date('Y-m-d H:i:s', $t) , "<br>";
$t += 86400; // 60*60*24(1日を秒で)
echo date('Y-m-d H:i:s', $t) , "<br>";

//
echo "<br>";
$dobj = new \DateTime();
echo $dobj->format('Y-m-d H:i:s') , "<br>";
$r = $dobj->add(new \DateInterval('P1D'));
echo $dobj->format('Y-m-d H:i:s') , "<br>";
var_dump( spl_object_id($dobj), spl_object_id($r) );
echo "<br>";

//
echo "<br>";
$dobj = new \DateTimeImmutable();
echo $dobj->format('Y-m-d H:i:s') , "<br>";
$r = $dobj->add(new \DateInterval('P1D'));
echo $dobj->format('Y-m-d H:i:s') , "<br>";
echo $r->format('Y-m-d H:i:s') , "<br>";
var_dump( spl_object_id($dobj), spl_object_id($r) );


