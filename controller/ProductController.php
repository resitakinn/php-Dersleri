<?php



class ProductController
{

    public function Products(): void //** Void Kelimesi Geriye veri döndürmez */
    {
        $title = "Ürünler";
        $ProductModel = new ProductModel;

        $products = $ProductModel->products();
        //    $products = ProductModel::products();
        //** static foksiyon örnegi */

        require_once APP_ROOT . '/view/products.php';
    }

    public function Product(int $product_id): void //** Void Kelimesi Geriye veri döndürmez */
    {
        $title = "Ürün";
        $ProductModel = new ProductModel;

        $product = $ProductModel->product($product_id);
  
        require_once APP_ROOT . '/view/product.php';
    }
}
