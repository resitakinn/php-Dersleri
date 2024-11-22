<?php
require_once __DIR__ . '/config.php';

// print_r($_SERVER['REQUEST_METHOD']); //** GET , POST , PUT , PATCH ,DELETE ,OPTİONS */
// print_r($_SERVER['REQUEST_URI']); //** urlmize gelen tüm istekleri alır  */
$_SERVER['REQUEST_URI'];

if ($_SERVER['REQUEST_URI'] == '/') {
    print "Anasayfadasınız";
}
else if ($_SERVER['REQUEST_URI'] == '/products') {
    print "hakkımzda sayfadasınız";
}