<?php
// form.php
//var_dump( $_GET );
//var_dump( $_POST );
foreach($_POST  as  $key => $value) {
    // XXX これは危ない！！！
    //echo $key , "は" , $value , "です<br>\n";

    // XSS対策済
    echo htmlspecialchars($key, ENT_QUOTES) 
       , "は" 
       , htmlspecialchars($value, ENT_QUOTES) 
       , "です<br>\n";
}
