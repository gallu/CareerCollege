<?php  // trait1.php
declare(strict_types=1);

Trait HogeTrait {
    public function sendSlack(string $message) {
        echo "Slackにmessageを送るよ！: {$message} <br>";
    }
}

class Hoge {
    use HogeTrait;
}

class Foo {
    use HogeTrait;
}

//
$h_obj = new Hoge();
$h_obj->sendSlack("Hogeで問題発生");

$f_obj = new Foo();
$f_obj->sendSlack("Fooからのmessage");
