<?php
// PdoSingleton.php
class PdoSingleton {
    //
    private function __construct() {
        // DBへの接続＆ハンドルの保持
        $this->dbh = $this->connectDb();
	}
    //
    public static function getInstance() {
		static $obj = null;
		if (null === $obj) {
			$obj = new static();
		}
		return $obj;
    }
    //
    public function getDbh() {
        return $this->dbh;
	}
    //
    public function __call($name, $params) {
//echo "call __call\n";
//var_dump($name, $params);
        assert( method_exists($this->dbh, $name), "存在しないメソッド: {$name}" );
        return call_user_func_array([$this->dbh, $name], $params);
	}

    //
    protected function connectDb() {
		/*
        $dsn  = Config::get('dsn');
        $user = Config::get('db_user');
        $pass = Config::get('db_pass');
        */
        $user = 'tech';
        $pass = 'tech';
        $dsn = 'mysql:dbname=tech;host=localhost;charset=utf8mb4';
        return new PDO($dsn, $user, $pass);
	}
//
private  $dbh;
}
//
function db($class = 'PdoSingleton') {
    return $class::getInstance();
}
//
assert_options(ASSERT_BAIL, 1);
//
$dbh = db()->getDbh();
var_dump($dbh);
$dbh = db()->getDbh();
var_dump($dbh);
//
$r = db()->errorInfo(); var_dump($r);
$r = db()->quote("a'b'c"); var_dump($r);
//
//db()->hoge();

/*
//
class TestPdoSingleton extends PdoSingleton{
    //
    protected function connectDb() {
        return MockObj(); // XXX
	}
}
//
$r = db('TestPdoSingleton')->errorInfo(); var_dump($r);
$r = db('TestPdoSingleton')->quote("a'b'c"); var_dump($r);
*/

