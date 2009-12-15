<?php
require('csspp.php');

$csspp = new CSSPP($_GET['file'], realpath(dirname(__FILE__) . '/../') . '/');

header('Content-Type: text/css');
echo $csspp;