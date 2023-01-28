<?php
// auth_token.php

$token = trim(`uuidgen -r`);
var_dump($token);
