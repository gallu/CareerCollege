<?php  // blackjack_clear.php
ob_start();
session_start();

unset($_SESSION['hand']);

header("Location: ./blackjack.php");
