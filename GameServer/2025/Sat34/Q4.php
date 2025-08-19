<?php  // Q4.php
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

トレイト名: SlackTrait

クラス名: Book
    使用トレイト: SlackTrait
 */
trait SlackTrait {
}

class Book {
    use SlackTrait;
}
