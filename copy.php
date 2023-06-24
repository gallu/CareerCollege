<?php

//
$year = 2023;

//
$from = basename(__DIR__ . '/../wwwroot');
$to = __DIR__;

//
$param = [
    2023 => [
        'GameServer' => [
            'Period12' => 'game_1',
            'Period34' => 'game_2',
        ],
        'PhpBeginner' => [
            'Period' => 'php_b',
        ],
        'Php' => [
            'PeriodTue' => 'php_1',
            'PeriodSat' => 'php_2',
        ],
        'WebServer' => [
            'Period' => 'web',
        ],
    ],
];

foreach($param[$year] as $key => $val) {
    foreach($val as $k => $v) {
        // pathの作成
        $fromo_path = __DIR__ . "/../wwwroot/{$v}";
        $to_path = __DIR__ . "/{$key}/{$year}/{$k}/";
        //
        $cmd = "mkdir -p {$to_path} \n";
        echo $cmd;
        $cmd = "cp {$fromo_path}/*.php {$to_path} \n";
        echo $cmd;
        $cmd = "cp {$fromo_path}/*.html {$to_path} \n";
        echo $cmd;
    }
}


