<?php
// Books_T.php
require_once('./Books.php');

$id = '01'; // テスト用ID

$book = new Books($id);
var_dump($book);
