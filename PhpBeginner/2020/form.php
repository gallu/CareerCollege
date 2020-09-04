<?php  // form.php

//var_dump( $_GET['t'] );

// XXX これは駄目！！！ 絶対！！！！
//echo '私の名前は ' , $_GET['t'] , ' です';

// こう書きましょう
echo '私の名前は ' , htmlspecialchars($_GET['t'], ENT_QUOTES, 'UTF-8') , ' です';

