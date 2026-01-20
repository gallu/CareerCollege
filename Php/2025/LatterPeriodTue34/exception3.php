<?php  // exception3.php

class HogeRuntimeException extends RuntimeException {}
class FooRuntimeException extends RuntimeException {}
class BarRuntimeException extends RuntimeException {}

try {
	// throw new RuntimeException("らんたいむ");
	throw new HogeRuntimeException("ほげらんたいむ");
	// throw new Exception("えくせぷしょん");
} catch (HogeRuntimeException $e) {
	echo "ほげきゃっち";
} catch (FooRuntimeException $e) {
	echo "ふーきゃっち";
} catch (BarRuntimeException $e) {
	echo "ばーきゃっち";
} catch (RuntimeException $e) {
	echo $e->getMessage(), "<br>";
} catch (Exception $e) {
	echo "2nd<br>";
	echo $e->getMessage(), "<br>";
}

echo "fin .";