<pre>
<?php
// 3rd.php
class  商品  {
public  $商品名;
public  $発売会社名;
public  $値段;
public  $紹介文;
}
//
class  書籍  extends  商品 {
public  $著者名;
public  $ISBN;
}
class  家電  extends  商品 {
public  $型番;
}
//
$obj  =  new  書籍();
var_dump( $obj );

