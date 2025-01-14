<?php  // box.php
declare(strict_types=1);
require_once __DIR__ . "/box_common.php";

if (isset($_SESSION[BOX_LOOTBOX])) {
    $list_num = count($_SESSION[BOX_LOOTBOX]);
} else {
    $list_num = null;
}
// var_dump($list_num);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>BOXがちゃ</title>
  </head>

  <body>
    <h1>BOXがちゃ</h1>
    <?php
        if (null === $list_num) {
            echo "カードなし<br>";
        } else {
            echo "残 {$list_num}枚<br>";
        }
    ?>
    ・<a href="./box_reset.php">BOXをリセットする</a><br>
    ・<a href="./box_pull.php">BOXから1枚がちゃる</a><br>
  </body>
</html>
