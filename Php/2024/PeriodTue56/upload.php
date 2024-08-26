<?php  // upload.php

// var_dump($_FILES);
/*
  ["fn"]=>
  array(6) {
    // 使っちゃダメ！！
    ["name"]=>
    string(8) "hoge.pdf"
    ["full_path"]=>
    string(8) "hoge.pdf"
    ["type"]=>
    string(15) "application/pdf"

    // 使える
    ["tmp_name"]=>
    string(14) "/tmp/phpPRlGqD"
    ["error"]=>
    int(0)
    ["size"]=>
    int(17123)
  }
*/
$type = mime_content_type($_FILES['fn']['tmp_name']);
var_dump($type);

