<?php
require_once __DIR__ . '/config.php';
require_once APP_ROOT . '/controller/HomeController.php';
require_once APP_ROOT . '/controller/ProductController.php';

// print_r($_SERVER['REQUEST_METHOD']); //** GET , POST , PUT , PATCH ,DELETE ,OPTİONS */
// print_r($_SERVER['REQUEST_URI']); //** urlmize gelen tüm istekleri alır  */


$url = $_SERVER["REQUEST_URI"];
$lastSlashPos = strrpos($url, '/'); // Son /'ın pozisyonunu bulur
$lastSegment = substr($url, $lastSlashPos);

if ($lastSegment == "/") {

    call_user_func_array([new HomeController, 'index'], []);

    // $homeController = new HomeController();
    // $homeController->index();

} else if ($lastSegment == "/products") {

    call_user_func_array([new ProductController, 'products'], []);

    //    $productController = new ProductController();
    //    $productController->Products();
} else {
    require_once APP_ROOT . '/view/404.php';
}
//** static sınıf ve fonksiyonla,kalıtım , url den parametrelerin alınıp classve methodla aktarılmaz */
