<?php   // date4.php
declare(strict_types=1);
//
/*
$t = time();
echo date('Y-m-d H:i:s', $t) , "<br>";
$t += ???; // 60*60*24*??(1月を秒で)
echo date('Y-m-d H:i:s', $t) , "<br>";
*/

//
//$dobj = new \DateTime('2022/1/31');
$dobj = new \DateTime('2024/1/31');
echo $dobj->format('Y-m-d H:i:s') , "<br>";
$dobj->add(new \DateInterval('P1M'));
echo $dobj->format('Y-m-d H:i:s') , "<br>";

