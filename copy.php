<?php

//
$year = 2024;

//
$from = basename(__DIR__ . '/../wwwroot');
$to = __DIR__;

//
$param = [
    2024 => [
        'GameServer' => [
            'Sat12' => 'S12',
            'Sat34' => 'S34',
        ],
        'Php' => [
            'PeriodTue34' => 'T34',
            'PeriodTue56' => 'T56',
            'PeriodSat56' => 'S56',
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
        $cmd = "cp {$fromo_path}/*sql* {$to_path} \n";
        echo $cmd;
        $cmd = "cp {$fromo_path}/*xlsx {$to_path} \n";
        echo $cmd;
        $cmd = "cp {$fromo_path}/*csv {$to_path} \n";
        echo $cmd;
    }
}


