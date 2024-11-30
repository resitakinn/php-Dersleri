<?php

//** veri tabanı ndan sorgu caliştırılıp ürün cektik */
 
class ProductModel extends BaseModel
{
    //** static fonksiyon */

    public  function products(): array | false
    {
        $statment = $this->pdo->query("SELECT * FROM products");
        $products = $statment->fetchAll(PDO::FETCH_ASSOC);
        return  $products ?: false;
    }
    public  function product($product_id): array | false
    {
        $statment = $this->pdo->prepare('SELECT * FROM products WHERE id =:product_id');
        $statment->execute(['product_id'=> $product_id]);
        $product = $statment->fetch(PDO::FETCH_ASSOC);
        return  $product ?: false;
    }
}
