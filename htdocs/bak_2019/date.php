<?php  // date.php
//
echo date('Y-m-d H:i:s'), "<br>\n";
echo date(DATE_ATOM), "<br>\n";
//
echo "<br>\n";
$date = new \DateTime();
echo $date->format('Y-m-d H:i:s'), "<br>\n";
echo $date->format(\DateTime::ATOM), "<br>\n";
//
echo "<br>\n";
$date = new \DateTimeImmutable();
echo $date->format('Y-m-d H:i:s'), "<br>\n";
echo $date->format(\DateTime::ATOM), "<br>\n";
