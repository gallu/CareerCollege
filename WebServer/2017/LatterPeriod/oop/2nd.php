<pre>
<?php
// 2nd.php
class  hoge  {
	public  function  test() {
		$this->p_data  =  mt_rand(1, 100);
	}
public  $data;
private  $p_data;
}
$obj  =  new  hoge();
$obj->data  =  'data';
//$obj->p_data  =  'p data';
$obj->test();
var_dump($obj);
