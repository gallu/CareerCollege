<?php  // scores.php
// 平均値
function scoresAverage($score) {
    // 全部の点数を合計する
    $sum = 0; // 初期化
    foreach($score as $k => $v) {
        // $sum = $sum + $v;
        $sum += $v;
    }
    // var_dump($sum);

    // 合計を「テストの数」で割る
    $r = $sum / count($score);
    
    return $r;
}
// 中央値
function scoresMedian($score) {
    // 昇順にsortする
    asort($score);
    // print_r($score);

    // hash配列の「値だけ」を抜き出す
    $score_array = array_values($score);
    // 配列の個数を把握
    $count = count($score);

    // 個数が奇数なら、真ん中の１個の値を返す
    if ( $count%2 === 1 ) {
        // 中央値を選び出す
        $idx = (int)($count / 2);
        $ret = $score_array[$idx];
    } else {
        // 個数が偶数の時
        $idx = (int)($count / 2);
        // 真ん中の２つの値を足す
        $total = $score_array[$idx - 1] + $score_array[$idx];
        // ２つの値の平均
        $ret = $total / 2;
    }

    return $ret;
}

// 標準偏差
function scoresDeviation($score) {
    // STEP01 平均点を求める
    // テストを受けた全員の得点を合計し、受験者数で割る。
    $avr = scoresAverage($score);
    // var_dump($avr);
    // echo "<br>";

    // STEP02 偏差を求めて2乗する
    // テストを受けた全員の偏差（得点から平均点を引いた値）を求めそれらをすべて2乗する。
    $d_total = 0;
    foreach ($score as $k => $v) {
        // echo "{$k}: {$v} <br>";        
        // 偏差を求める
        $d = $v - $avr;
        // echo "{$d}<br>";
        // 偏差を2乗する
        $d2 = $d ** 2;
        // echo "{$d2}<br>";
        
        // 偏差の２乗を全員分合計
        $d_total += $d2;
    }

    // STEP03 偏差の2乗の合計を受験者数で割り分散を求める
    // STEP02で求めた、偏差の２乗を全員分合計し、受験した人数で割ることで、「分散（偏差の2乗の平均値）」が求められる。
    $variance = $d_total / count($score);
    // echo "{$d_total} -> {$variance} <br>";

    // STEP04 分散の正の平方根を計算し「標準偏差」を求める
    // 分散の正の平方根を計算して「標準偏差」が求められる。
    $sd = sqrt($variance);
    // var_dump($sd);

    return $sd;
}

$score = [
    "PHP" => 92,
    "Python" => 74,
    "サーバ" => 70,
    "DB" => 89,
    "HTML" => 95,
    "CSS" => 78,
    "基本情報" => 68,
];
$r = scoresAverage($score);
echo "平均点は {$r} です<br>";

$r = scoresMedian($score);
echo "中央値は {$r} です<br>";

$r = scoresDeviation($score);
echo "標準偏差は {$r} です<br>";

