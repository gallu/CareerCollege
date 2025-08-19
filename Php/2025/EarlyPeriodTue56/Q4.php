<?php  // Q4.php
/*
以下のクラスを定義しなさい。
クラス名: Book 

クラス名: Character
    継承元クラス Book
*/
class Book {
}
class Character extends Book {
}

/*
以下のクラスを定義しなさい。
トレイト名: ItemTrait 

クラス名: Category
    使うトレイト: ItemTrait
*/
trait ItemTrait {
}
class Category {
    use ItemTrait;
}

/*
以下のクラスを定義しなさい。
インタフェース名: Publisher 

クラス名: Format
    継承元インタフェース: Publisher
 */
interface Publisher {
}
class Format implements Publisher {
}
