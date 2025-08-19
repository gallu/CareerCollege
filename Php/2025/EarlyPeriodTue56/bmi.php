<?php  // bmi.php
declare(strict_types=1);

class BmiResult {
    private float $bmi;
    private string $criteria;
    
    public function __construct(float $bmi, string $criteria) {
        $this->bmi = $bmi;
        $this->criteria = $criteria;
    }
    //
    public function getBmi(): float {
        return $this->bmi;
    }
    public function getCriteria(): string {
        return $this->criteria;
    }
}

class Bmi {
    // 体重はkg, 身長はcm
    public function cal(float|int $weight, float|int $height): BmiResult {
        // 身長の単位をcmからmにする
        $height_m = $height / 100;
        // BMI ＝ 体重kg ÷ (身長m)2
        $bmi = $weight / ($height_m ** 2);

        // 日本肥満学会の判定基準
        $criteria = "";
        if ($bmi < 18.5) {
            $criteria = "低体重(痩せ型)";
        } elseif ($bmi < 25) {
            $criteria = "普通体重";
        } elseif ($bmi < 30) {
            $criteria = "肥満(1度)";
        } elseif ($bmi < 35) {
            $criteria = "肥満(2度)";
        } elseif ($bmi < 40) {
            $criteria = "肥満(3度)";
        } else {
            $criteria = "肥満(4度)";
        }

        return new BmiResult(bmi: $bmi, criteria: $criteria);
    }
}
//
$bobj = new Bmi();
$r = $bobj->cal(84, 170);
var_dump($r);
