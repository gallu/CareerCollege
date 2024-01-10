<?php // lq3.php
/*
問)
クラス Hoge を作成します
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい
・定数 AD に、 int型で 2 を指定します
・メソッド getDate() を作成します。
    引数はありません
    戻り値はstring型
    処理
        現在時刻を取得します
        現在時刻に、定数 AD 日を加算します
        「現在時刻に、定数 AD 日を加算した」日付の文字列を return します
            日付文字列のフォーマットは DATE_ATOM とします

上述クラスを作成し、メソッドgetDate() を呼び出し、戻り値を出力しなさい。
 */
class Hoge {
    const AD = 2;

    /*
    public function getDate(): string {
        // 現在時刻を取得します
        $dobj = new DateTime();
        // 現在時刻に、定数 AD 日を加算します
        $dobj->add(new DateInterval("P" . static::AD . "D"));
        // 「現在時刻に、定数 AD 日を加算した」日付の文字列を return します
        // 日付文字列のフォーマットは DATE_ATOM とします
        return $dobj->format(DATE_ATOM);
    }
    */
    /*
    public function getDate(): string {
        // 現在時刻を取得します
        // 現在時刻に、定数 AD 日を加算します
        $dobj = new DateTime("+" . static::AD . "days");
        // 「現在時刻に、定数 AD 日を加算した」日付の文字列を return します
        // 日付文字列のフォーマットは DATE_ATOM とします
        return $dobj->format(DATE_ATOM);
    }
    */
    public function getDate(): string {
        // 現在時刻を取得します
        $t = time();
        // 現在時刻に、定数 AD 日を加算します
        $t += 86400 * static::AD;

        // 「現在時刻に、定数 AD 日を加算した」日付の文字列を return します
        // 日付文字列のフォーマットは DATE_ATOM とします
        return date(DATE_ATOM, $t);
    }
}

$hobj = new Hoge();
var_dump( $hobj->getDate() );
