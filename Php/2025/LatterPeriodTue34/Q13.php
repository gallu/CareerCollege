<?php  // Q13.php
/*
X(Twitter)の類似サービスを構築します。
いったん「１ユーザが書き込んだ１つのメッセージ」を扱うクラスを作成します。

クラス名: TechMessage
プロパティ
    ユーザID   整数
    タイトル    文字列
    本文      文字列
    書き込み日時  文字列
要件
    コンストラクタで上述４つを引数として渡すと、インスタンスが生成できること
        validateはいったんなし
    タイトル、本文は、getterがあること
*/
class TechMessage {
    private int $user_id; // ユーザID   整数
    private string $title; // タイトル    文字列
    private string $body; // 本文      文字列
    private string $posted_at; // 書き込み日時  文字列

    public function __construct(int $uid, string $title, string $body, string $p_at) {
        // [memo]validateはいったんなし
        $this->user_id = $uid;
        $this->title = $title;
        $this->body = $body;
        $this->posted_at = $p_at;
    }

    public function getTitle(): string {
        return $this->title;
    }
    public function getBody(): string {
        return $this->body;
    }
}

$obj = new TechMessage(123, "たいとる", "本文", "2025/12/16 13:25");
var_dump($obj);

/*
X(Twitter)の類似サービスを構築します。
いったん「１ユーザが書き込んだ１つのメッセージ」を扱うクラスを作成します。
書き込みで「画像付き」を、一部ユーザにむけて解放します。
そのため、TechMessageクラスに「画像付き」用の新しいクラスが必要になります。

TechMessageクラスを継承して「画像情報」をプロパティに持てるようにしてください。
画像情報はURLフォーマット(文字列)を想定しています。

・プロパティとコンストラクタで、画像情報を持てたり渡せたりすること(１URLだけ)
・getterで画像情報を取得できること
*/
class TechMessageWithImage extends TechMessage {
    private string $image_url; // 画像URL
    
    public function __construct(int $uid, string $title, string $image_url, string $body, string $p_at) {
        // 親のプロパティを呼び出す
        parent::__construct($uid, $title, $body, $p_at);
        // 自身の追加のプロパティ
        $this->image_url = $image_url;
    }

    public function getImageUrl(): string {
        return $this->image_url;
    }
}


