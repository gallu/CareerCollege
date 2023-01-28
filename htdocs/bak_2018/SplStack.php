<?php  // SplStack.php

//
$stack = new SplStack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
//
$i = $stack->pop();
var_dump($i);
$i = $stack->pop();
var_dump($i);
//
$stack->push(5);
//
$i = $stack->pop();
var_dump($i);
