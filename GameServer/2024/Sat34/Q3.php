<?php  // Q3.php
/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

クラス名: DQPC
プロパティ
    name string型
    hp int型
    mp int型

コンストラクタ
    引数を3つ
    処理
        引数のデータをプロパティに代入

上述クラスのインスタンスを作成し、インスタンスをvar_dump()で出力しなさい。
 */
class DQPC {
    private string $name;
    private int $hp;
    private int $mp;

    public function __construct(string $name, int $hp, int $mp) {
        $this->name = $name;
        $this->hp = $hp;
        $this->mp = $mp;
    }
}

$obj = new DQPC("ロト", 200, 50);
var_dump($obj);
echo "<br>";

/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

クラス名 DndPC
プロパティ
    name string型
    job string型

コンストラクタ
    引数を2つ
    処理
        引数のデータをプロパティに代入

上述クラスのインスタンスを作成し、インスタンスをvar_dump()で出力しなさい。
 */
class DndPC {
    private string $name;
    private string $job;

    public function __construct(string $name, string $job) {
        $this->name = $name;
        $this->job = $job;
    }
}

$obj = new DndPC("ロト", "勇者");
var_dump($obj);

/*
 for文を使って 0から99までの整数を順番に出力するコードを書きなさい
 */
// for ($i = 0; $i <= 99; ++$i) {
for ($i = 0; $i < 100; ++$i) {
    echo $i , ",";
}
echo "<br>\n";

/*
 "1st", "2nd", "3rd" の３つの要素を持つ配列を作成しなさい
 作成した配列を、print_rまたはvar_dumpで出力しなさい
 */
// $arr = array();
$arr = ["1st", "2nd", "3rd"];
var_dump($arr);

/*
 randomに３から１８の間の数値を作成します。
 random_int(3, 18) で作成可能です
 作成した数値によって、ボーナス値を求めなさい
 
 数値 3 -> ボーナス -3
 数値 4,5 -> ボーナス -2
 数値 6,7,8 -> ボーナス -1
 数値 9～12 -> ボーナス 0
 数値 13,14,15 -> ボーナス +1
 数値 16,17 -> ボーナス +2
 数値 18 -> ボーナス +3 
 */
$num = random_int(3, 18);
$bonus = 0;
if ($num === 3) {
    $bonus = -3;
} elseif ($num <= 5) {
    $bonus = -2;
} elseif ($num <= 8) {
    $bonus = -1;
}

if ($num === 3) {
    $bonus = -3;
} elseif ($num === 4 || $num === 5) {
    $bonus = -2;
} elseif ($num === 6 || $num === 7 || $num === 8) {
    $bonus = -1;
}

switch ($num) {
    case 3:
        $bonus = -3;
        break;
    case 4:
    case 5:
        $bonus = -2;
        break;
    case 6:
    case 7:
    case 8:
        $bonus = -1;
        break;
}

$bonus = match($num) {
    3 => -3,
    4,5 => -2,
    6, 7, 8 => -1,
};

/*
 以下の処理をする関数を作成しなさい。
関数名 calBonus
引数 int
戻り値 int(ボーナス値)
 
 引数 によって、ボーナス値を求めなさい
 
 引数 3 -> ボーナス -3
 引数 4,5 -> ボーナス -2
 引数 6,7,8 -> ボーナス -1
 引数 9～12 -> ボーナス 0
 引数 13,14,15 -> ボーナス +1
 引数 16,17 -> ボーナス +2
 引数 18 -> ボーナス +3 
 */
function calBonus(int $num): int {
    $bonus = match($num) {
        3 => -3,
        4,5 => -2,
        6, 7, 8 => -1,
    };
    return $bonus;

    // --------------------------------
    if ($num === 3) {
        return -3;
    } elseif ($num === 4 || $num === 5) {
        return -2;
    } elseif ($num === 6 || $num === 7 || $num === 8) {
        return -1;
    }
}








