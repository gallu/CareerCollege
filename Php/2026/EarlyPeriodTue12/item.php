<?php  // item.php
declare(strict_types=1);
/**
 * 「ECサイトの商材」をイメージ
 */
class うちの商材 {
    private int $価格;
}

class 書籍 extends うちの商材 {
    private string $タイトル;
    private string $出版社;
    private string $著者;
}

class 白物家電 extends うちの商材 {
    private string $商品名;
    private string $メーカー名;
    private float $消費電力;
}

