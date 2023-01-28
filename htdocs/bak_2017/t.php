<?php

var_dump(filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT, array('options' => array('min_range' => 18, 'max_range' => 60))));

if (false === filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT, array('options' => array('min_range' => 18, 'max_range' => 60)))) {
    echo "error<br>\n";
}

echo 'fin';

