<?php  // kuji.php
//  http://dev2.m-fr.net/XXX/kuji.php

// おみくじの束(たば)を用意する
$kuji_box = [
    '大吉' ,
    '中吉' ,
    '吉'   ,
    '小吉' ,
    '末吉' ,
    '凶'   ,
    '大凶' ,
];
//var_dump( $kuji_box );

// おみくじを１つ引く
$kuji_box_count = count($kuji_box);
//var_dump( $kuji_box_count );

//var_dump( $kuji_box[0] );
//var_dump( $kuji_box[ $kuji_box_count - 1 ] );

$kuji_no = mt_rand(0, $kuji_box_count - 1);

// おみくじの文章を取り出す
$kuji = $kuji_box[$kuji_no];
//var_dump($kuji);

// おみくじの文章を表示する
?><html>
<body>
今日の運勢は<span style="color: #ff0000">
<?php echo htmlspecialchars($kuji, ENT_QUOTES); ?>
</span>です。

</body>
</html>








