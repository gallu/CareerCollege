<?php // nullop.php

$arr = [
    'key' => 'value',
];

$val = $arr['key'];
var_dump($val);

$val = $arr['no key'];
var_dump($val);

// 従来（PHP5まで)の方法
if (array_key_exists('no key', $arr)) {
    $val = $arr['no key'];
} else {
    $val = 'no key value';
}
var_dump($val);

// 新しい（PHP7以降)の方法
$val = $arr['no key'] ?? 'no key value';
var_dump($val);

















