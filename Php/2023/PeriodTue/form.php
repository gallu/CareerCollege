<?php  // form.php

// var_dump( $_GET );
// var_dump( $_POST );

$in = $_POST["in"];
echo "入力は";
echo htmlspecialchars($in);
echo "です";
