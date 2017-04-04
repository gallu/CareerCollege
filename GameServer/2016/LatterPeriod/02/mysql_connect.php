<?php

// XXX PHP7では動かない ＆ PHP5系でも現在非推奨！！
$link = mysql_connect('localhost', 'user', 'pass');
if (!$link) {
    print(mysql_error());
}
