<?php

//
$year = 2025;

//
$from = basename(__DIR__ . '/../wwwroot');
$to = __DIR__;

//
$param = [
    2025 => [
        'GameServer' => [
            'Sat12' => 'S12',
            'Sat34' => 'S34',
        ],
        'Php' => [
            'EarlyPeriodTue34' => 'T34',
            'EarlyPeriodTue56' => 'T56',
            'EarlyPeriodSat56' => 'S56',
	    // Latter
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


