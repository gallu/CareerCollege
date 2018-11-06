<?php  // ArrayObject_2.php
//
$awk_1 = [1,2,3,4,5];
echo json_encode($awk_1), "\n";
//
$awk_2 = ['name' => 'John Smith', 'age' => 33];
echo json_encode($awk_2), "\n";

//
$awk_1 = [];
echo json_encode($awk_1), "\n";
// 「空のhash配列」を作りたいときは、ArrayObjectで
$awk_2 = new ArrayObject();
echo json_encode($awk_2), "\n";


