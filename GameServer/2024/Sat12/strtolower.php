<?php  // strtolower.php
declare(strict_types=1);

$base = "All in the golden afternoon
  Full leisurely we glide;
 For both our oars, with little skill,
  By little arms are plied,
 While little hands make vain pretence
  Our wanderings to guide.";

echo $base , "<br>\n";

$lower = strtolower($base);
echo $lower , "<br>\n";

$upper = strtoupper($base);
echo $upper , "<br>\n";
