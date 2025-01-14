<?php  // sapmle_download.php

// XXX なにがしかの処理が多分きっとある

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment; filename="sample2.xlsx"');

echo file_get_contents( __DIR__ . "/sample.xlsx");
