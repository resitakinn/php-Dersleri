<?php
require_once __DIR__ . '/config.php';

// print_r($_SERVER['REQUEST_METHOD']); //** GET , POST , PUT , PATCH ,DELETE ,OPTİONS */
// print_r($_SERVER['REQUEST_URI']); //** urlmize gelen tüm istekleri alır  */
$_SERVER['REQUEST_URI'];

// videoda / dan sonrası yazmıyordu hocamız bende hata alıyordum access de surekli gerekli düzeltme sonrası çalıştı 
if ($_SERVER['REQUEST_URI'] == '/php-dersleri/') {
    require_once APP_ROOT .'/view/home.php';
}
else if ($_SERVER['REQUEST_URI'] == '/php-dersleri/products') {
    require_once APP_ROOT . '/view/products.php';
}