<?php  declare(strict_types=1); // e03.php

// $input_1 = isset($_POST["input_1"]) ? $_POST["input_1"] : "";
$input_1 = $_POST["input_1"] ?? "";
$input_2 = $_POST["input_2"] ?? "";

echo htmlspecialchars($input_1);
echo htmlspecialchars($input_2);
