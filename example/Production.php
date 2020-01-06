<?php
// echo '123123123';
include ('../Miracle.php');
$path = './Test.php';
$domain = '123';
$path_save = './';
$res = (new \Miracle)->index($path)->markdownText($domain)->setMarkdown($path_save);
