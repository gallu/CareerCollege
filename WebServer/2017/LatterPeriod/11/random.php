<pre>
<?php
// random.php
// —”‚ÌƒV[ƒh(Ží)‚ðÝ’è‚·‚é
//mt_srand(time());
//mt_srand( 1 );
// —”‚ðì‚é
for($i = 0; $i < 10; ++$i) {
    // —”‚ðì‚é
    //$r = rand(0, 99);
    $r = mt_rand(0, 99);
    //$r = random_int(0, 99);
    echo "{$r}\n";
}

