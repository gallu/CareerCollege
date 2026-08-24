<?php  // Q2.php
/*
以下のif-else文を書きなさい。
    変数 total に、値 81 を代入しなさい
    「変数 total が 38 以上 なら「ok」を echo、
      そうでなければ「ng」を echo で出力する」if-else文を書きなさい
*/
$total = 81;
if ($total >= 38) {
    echo "ok";
} else {
    echo "ng";
}

/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: User // ユーザー
    プロパティ:
    string型 lastLoginAt // 意味合いは 最終ログイン日時
また、メソッドとしてセッターとゲッターを作成しなさい。メソッド名は以下を想定します。
    setLastLoginAt() / getLastLoginAt()
*/
class User {
    private string $lastLoginAt;

    public function setLastLoginAt(string $lastLoginAt) {
        $this->lastLoginAt = $lastLoginAt;
    }
    public function getLastLoginAt(): string {
        return $this->lastLoginAt;
    }
}

/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Employee // 従業員
プロパティ:
    string型 status // 意味合いは ステータス

また、コンストラクタを作成しなさい。
    コンストラクタは、引数を1つとし、引数をプロパティに代入しなさい。
また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
    getStatus()
*/
class Employee {
    private string $status;

    public function __construct(string $status) {
        $this->status = $status;
    }
    public function getStatus(): string {
        return $this->status;
    }
}

/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

インタフェース名: WeightInterface
    getWeight(): float

クラス名: Reservation // 予約
実装インタフェース: WeightInterface
プロパティ:
    float型 weight // 意味合いは 重量
また、コンストラクタを作成しなさい。
    コンストラクタは、引数を1つとし、引数をプロパティに代入しなさい。
また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
    getWeight(): float
*/
interface WeightInterface {
    public function getWeight(): float;
}

class Reservation implements WeightInterface {
    private float $weight;

    public function __construct(float $weight) {
        $this->weight = $weight;
    }
    public function getWeight(): float {
        return $this->weight;
    }
}
