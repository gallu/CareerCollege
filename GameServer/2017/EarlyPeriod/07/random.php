<pre>
<?php
// random.php
// 乱数のシード(種)を設定する
//mt_srand(time());
//mt_srand( 1 );
// 乱数を作る
for($i = 0; $i < 10; ++$i) {
    // 乱数を作る
    //$r = rand(0, 99);
    $r = mt_rand(0, 99);
    //$r = random_int(0, 99);
    echo "{$r}\n";
}

