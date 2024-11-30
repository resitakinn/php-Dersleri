<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/router.php';
require_once APP_ROOT . '/model/BaseModel.php';
require_once APP_ROOT . '/controller/HomeController.php';
require_once APP_ROOT . '/controller/ProductController.php';
require_once APP_ROOT . '/model/productModel.php';


// print_r($_SERVER['REQUEST_METHOD']); //** GET , POST , PUT , PATCH ,DELETE ,OPTİONS */
// print_r($_SERVER['REQUEST_URI']); //** urlmize gelen tüm istekleri alır  */


// $url = $_SERVER["REQUEST_URI"];
// $lastSlashPos = strrpos($url, '/'); // Son /'ın pozisyonunu bulur
// $lastSegment = substr($url, $lastSlashPos);

$router = new Router;
$request_uri = str_replace([basename($_SERVER['SCRIPT_NAME']), dirname($_SERVER['SCRIPT_NAME'])], '', $_SERVER['REQUEST_URI']);



$request_uri = explode('/', $request_uri);

// Router::get('ürünler','products','ProductController','products');
$router->get('ürünler','products','ProductController','products');


// if ($request_uri[1] == "") {

//     call_user_func_array([new HomeController, 'index'], []);
// } else if ($request_uri[1] == "products") {

//     call_user_func_array([new ProductController, 'products'], []);
// } 
// else if ($request_uri[1] == "product") {
// $product_id = $request_uri[2];
//     call_user_func_array([new ProductController, 'product'], ['product_id' => $product_id]);
// } else {
//     require_once APP_ROOT . '/view/404.php';
// }
//** static sınıf ve fonksiyonla,kalıtım , url den parametrelerin alınıp classve methodla aktarılmaz */
