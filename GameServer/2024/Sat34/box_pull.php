<?php  // box_pull.php
declare(strict_types=1);
require_once __DIR__ . "/box_common.php";

if ( (false === isset($_SESSION[BOX_LOOTBOX])) || (0 === count($_SESSION[BOX_LOOTBOX])) ) {
    echo "カードないからリセットしといて～";
    exit;
}

$card = array_pop($_SESSION[BOX_LOOTBOX]);
var_dump($card);
