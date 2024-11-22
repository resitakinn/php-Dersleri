<?php
// ternary -> if Bloğu
$site = (isset($_SERVER['HTTP_HOST'])) ? 'http://' . $_SERVER['HTTP_HOST'] : 'https//' . $_SERVER['HTTPS_HOST'];
define('APP_URL',$site);
define('APP_ROOT',__DIR__);





?>