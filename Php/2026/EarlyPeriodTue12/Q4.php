<?php  // Q4.php
/*
クラス名: Department // 部門
プロパティ:
int型 mp // 意味合いは マジックポイント

また、コンストラクタを作成しなさい。
コンストラクタは、引数をプロパティに代入しなさい。
また、メソッドとしてゲッターを作成しなさい。


クラス名: Comment // コメント
    継承元: Department
プロパティ:
string型 name // 意味合いは キャラクター名

また、コンストラクタを作成しなさい。
コンストラクタは、引数を２つとし、引数をそれぞれプロパティに代入しなさい。
また、メソッドとしてゲッターを作成しなさい。
*/
class Department {
    private int $mp; // マジックポイント
    public function __construct(int $mp) {
        $this->mp = $mp;
    }
    public function getMp(): int {
        return $this->mp;
    }
}
class Comment extends Department {
    private string $name;
    public function __construct(string $name, int $mp) {
        parent::__construct($mp);
        $this->name = $name;
    }
    public function getName(): string {
        return $this->name;
    }
}
