<?php
//require '../vendor/autoload.php';
//require '../phpqrcode/qrlib.php';
require_once '../vendor/phpqrcode/qrlib.php';
//use phpqrcode;
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$url = urldecode($_GET["data"]);
QRcode::png($url);
echo $url;
