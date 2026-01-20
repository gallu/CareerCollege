<?php  // download.php

// 認可とかなんとか、きっと何か処理がある


// Content-typeをPDFに設定する
header("Content-type: application/pdf");

// PDFを出力する
echo file_get_contents("./pdf_test.pdf");
