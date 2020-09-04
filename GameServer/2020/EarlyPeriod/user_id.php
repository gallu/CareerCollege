<?php  // user_id.php
//  http://dev2.m-fr.net/アカウント名/user_id.php

// XXX uniqid()は「絶対に使っちゃだめ！！！！」
echo uniqid() , "<br>\n";
echo uniqid(mt_rand() , true) , "<br>\n";

// XXX 「一意性」はOK、「推測困難」に疑問が残る
$uuid = trim(shell_exec('uuidgen -r'));
echo $uuid , "<br>\n";

//
$token = random_bytes(32);
//echo $token , "<br>\n";
echo bin2hex($token) , "<br>\n";
echo base64_encode($token) , "<br>\n";

