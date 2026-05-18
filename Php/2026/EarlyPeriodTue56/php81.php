<?php   // php81.php

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}
// var_dump( Suit::Hoge ); // Undefined constant 
var_dump( Suit::Hearts );
var_dump( Suit::Hearts->name );

enum Suit2: string
{
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';
}
var_dump( Suit2::Hearts->name );
var_dump( Suit2::Hearts->value );

// 第一級callableを生成する記法 
echo "<br><br>\n";
$fn = strlen(...);
var_dump( $fn('abc') );

// 初期化時の new 式の許可 
echo "<br><br>\n";
class HogeInit {
}
function hogeIni(HogeInit $obj = new HogeInit()) {
    var_dump($obj);
}
hogeIni();
