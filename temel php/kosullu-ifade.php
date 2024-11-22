<?php
require_once __DIR__ . '/config.php';

// Koşulu ifade if,else,else if,switch case
// $products  = [
//  ['product_id' => 1],
//  ['product_id' => 2],
//  ['product_id' => 3],
//  ['product_id' => 4],
//  ['product_id' => 5]

// ];


// $products = [
//     ['product_id' => 1, 'name' => 'bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
//     ['product_id' => 2, 'name' => 'klavye', 'color_code' => 'BZ', 'color_name' => 'Beyaz'],
//     ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'KZ', 'color_name' => 'Kırmızı']
// ];


// if (isset($products)) {
//     print_r($products);
//   }
//   else{
//       print 'Bu  değişken değildir.'; 
//   }

// if (isset($products[3])) {
//     print_r($products);
//   }
//   else if(empty($products)){
//   print 'Bu bir Değişken değeri yoktur';
//   }else{
//       print 'Herhangi Bir koşul sağlanmadı'; 
//   }

// if ($products[0]['product_id'] > 3) {
    //     print $products[0]['name'];
    // }else {
    //     print 'Boyle Bir Değer Yok';
    // }


    $products = [
    ['product_id' => 1, 'name' => 'Bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
    ['product_id' => 2, 'name' => 'Klavye', 'color_code' => 'BZ', 'color_name' => 'Beyaz'],
    ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'KZ', 'color_name' => 'Kırmızı']
];

    //    $products_name = "Bilgisayar";

    switch ($products[0]['product_id']) {
        case '1':
            print $products[0]['name'];
            break;
        case '2':
            print $products[1]['name'];
            break;
        case '3':
            print $products[2]['name'];
            break;
        
        default:
           print 'Değer Boş';
            break;
    }
 