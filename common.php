<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
$TIMESTAMP = date("Y-m-d H:i:s");
$CUR_DATE = date("Y-m-d");
$CUR_TIME = date("H:i:s");
$urlonly = explode('/', parse_url(basename($_SERVER['REQUEST_URI']), PHP_URL_PATH));
$urlonly = trim(end($urlonly));
?>