<?php
/*
 create_user_table.php
 */

// DBに接続
require_once('db.php');

// SQL(DDL)流す
$sql = "
CREATE TABLE users(
  user_id  varbinary(128) not null,
  password  varbinary(128) not null,
  memo  text,
  PRIMARY KEY(user_id)
);
";

// DDL実行
$r = $dbh->query($sql);
var_dump($r);
