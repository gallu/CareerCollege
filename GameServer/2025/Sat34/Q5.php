<?php  // Q5.php
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Event

静的メソッド: getAll()
    処理: なし
    戻り値: 空の配列

getAll()を実行、戻り値をvar_dumpで出力。
 */
class Event {
    public static function getAll(): array {
        return [];
    }
}

$r = Event::getAll();
var_dump($r);
