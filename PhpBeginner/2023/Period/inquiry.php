<?php  // inquiry.php

// var_dump($_GET);
// var_dump($_POST);

// $hide = $_POST["hide"]  ??  "";
// $name = $_POST["name"]  ??  "";

$params = [
    "hide",
    "name",
    "date",
    "email",
    "body",
];
$data = [];
foreach($params as $v) {
    $data[$v] = $_POST[$v]  ??  "";
}

var_dump($data);
foreach($data as $k => $v) {
    echo "{$k} is ", htmlspecialchars($v), "<br>\n";
}
