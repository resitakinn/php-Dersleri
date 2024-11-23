<?php



class ProductController{

function Products(){
    $title = "Ürünler";
    $products = [
        ['product_id' => 1, 'name' => 'Bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
        ['product_id' => 2, 'name' => 'Klavye', 'color_code' => 'BZ', 'color_name' => 'Beyaz'],
        ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'KZ', 'color_name' => 'Kırmızı']
    ];
    require_once APP_ROOT . '/view/products.php';
}

}