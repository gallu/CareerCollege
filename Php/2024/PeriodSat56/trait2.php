<?php // trait2.php
declare(strict_types=1);

Trait HogeTrait {
    public function sendSlack(string $message) {
        echo "Slackにmessageを送るよ！: {$message} <br>";
    }
    protected function proFunc() {
        echo __METHOD__ , "<br>";
        var_dump($this->num);
        echo "<br>";
    }
    private int $num = 123;
}

class Hoge {
    use HogeTrait;
    public function func() {
        $this->proFunc();
    }
}

$obj = new Hoge();
$obj->sendSlack("hoge send");
$obj->func();
var_dump($obj);
