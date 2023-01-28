<?php  // SplQueue.php

$queue = new SplQueue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
//
$i = $queue->dequeue();
var_dump($i);
$i = $queue->dequeue();
var_dump($i);
//
$queue->enqueue(4);
//
$i = $queue->dequeue();
var_dump($i);
