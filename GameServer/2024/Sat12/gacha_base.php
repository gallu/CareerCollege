<?php  // gacha_base.php

function getGachaList() {
    $r = [
        // id, 確率, カード名
        ['id' => 1, "probability" => 40, "name" => "コボルト"],
        ['id' => 2, "probability" => 30, "name" => "ゴブリン"],
        ['id' => 3, "probability" => 15, "name" => "オーク"],
        ['id' => 4, "probability" => 10, "name" => "グール"],
        ['id' => 5, "probability" =>  4, "name" => "ジャイアント"],
        ['id' => 6, "probability" =>  1, "name" => "ドラゴン"],
    ];

    return $r;
}
