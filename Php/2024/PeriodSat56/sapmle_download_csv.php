<?php  // sapmle_download_csv.php
/*
 * イメージとしては
   ・管理画面
   ・とあるデータを、RDBから吸い上げてcsvにしてダウンロード
 */
class DummyData {
    // データを作りこむ処理(のつもり)
    public function exec() {
    }

    public function getData(): array {
        $data = [];

        $row = random_int(5, 10);
        for($i = 0; $i < $row; ++$i) {
            $datum = [];
            for($j = 0; $j < 5; ++$j) {
                $datum[] = random_int(1, 200) * 100;
            }
            $data[] = $datum;
        }

        return $data;
    }
}

// データをRDBから吸い上げた(つもり)
$obj = new DummyData();
$obj->exec(); // データを作成(吸い上げ)
$data = $obj->getData();
// var_dump($data);

// ファイル名の作成
$fn = 'dummy_data.' . date('YmdHi') . '.csv';

// CSVダウンロード
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename={$fn}");

// echo "1,2,3\n4,5,6\n";

// データの出力
$fp = fopen("php://output", "w");
foreach($data as $datum) {
    fputcsv($fp, $datum);
}
fclose($fp);
