<?php  // Q1.php
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Character // キャラクター
プロパティ:
    int型 hp

上述クラスのインスタンスを作って、インスタンスをvar_dump()で表示しなさい。
*/
class Character {
    private int $hp;
}
$obj = new Character();
var_dump($obj);

