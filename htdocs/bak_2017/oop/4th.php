<pre>
<?php
// 4th.php
class  hoge  {
	// setter
	public  function  set_data($i) {
		$this->data  =  $i;
	}
private  $data;
}
$obj  =  new  hoge();
$obj->set_data( 100 );
var_dump( $obj );
