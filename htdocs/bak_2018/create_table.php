<?php // create_table.php

require_once('pdo.php');
//var_dump($dbh);

$sql = '
CREATE TABLE php_test (
  php_test_id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  num INT,
  string VARCHAR(256),
  PRIMARY KEY(php_test_id)
);
';
// ƒe[ƒuƒ‹ì¬
$dbh->query($sql);


