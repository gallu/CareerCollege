<?php   // form.php
// XSS対策
function h(string $s) : string {
    return htmlspecialchars($s, ENT_QUOTES);
}

//var_dump($_GET);
//var_dump($_POST);

$name = $_POST['name'] ?? "";
//var_dump($name);
?><!doctype html>
こんにちは 
<?php
    //echo $name; // これはダメ！！
    echo h($name);
?>
 さん！
