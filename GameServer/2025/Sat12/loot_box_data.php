<?php  // loot_box_data.php
/*
・がちゃのデータを、「hash配列」の配列で
・内容は「ファンタジーのモンスター」
・カードの種類は8種類
・１枚のカードの情報は「id」「カード名」「排出確率」「フレーバーテキスト」
    key名は英語に翻訳して
・排出確率は「整数」で、合計が100になるように調節
    排出確率はある程度偏りがあるようにして

これを「PHPの書式」で出力して。
*/
$loot_box_data = [
    [
        'id' => 1,
        'name' => 'Phoenix',
        'probability' => 20,
        'flavor_text' => 'A fiery bird reborn from ashes, symbol of eternal hope.'
    ],
    [
        'id' => 2,
        'name' => 'Cerberus',
        'probability' => 18,
        'flavor_text' => 'The three-headed guardian of the underworld, fierce and loyal.'
    ],
    [
        'id' => 3,
        'name' => 'Slime King',
        'probability' => 15,
        'flavor_text' => 'A massive gelatinous monarch commanding legions of slimes.'
    ],
    [
        'id' => 4,
        'name' => 'Goblin Shaman',
        'probability' => 14,
        'flavor_text' => 'A cunning spellcaster who twists nature to its will.'
    ],
    [
        'id' => 5,
        'name' => 'Mimic',
        'probability' => 13,
        'flavor_text' => 'A treasure chest with teeth, waiting for greedy adventurers.'
    ],
    [
        'id' => 6,
        'name' => 'Griffin',
        'probability' => 10,
        'flavor_text' => 'A majestic beast guarding the kingdom from above and below.'
    ],
    [
        'id' => 7,
        'name' => 'Dark Elf',
        'probability' => 7,
        'flavor_text' => 'A swift hunter from the shadows, deadly with every strike.'
    ],
    [
        'id' => 8,
        'name' => 'Dragon Lord',
        'probability' => 3,
        'flavor_text' => 'The ruler of the skies, whose roar scorches mountains.'
    ]
];