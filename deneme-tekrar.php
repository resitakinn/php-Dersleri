<?php
print SITE;
print "<br>";
print APP_ROOT;


// $strings_variable = 'Mehmet Reşit Akın';
// $args1 = 20;
// $args2 = 20;
// print "<br>";
// print "<h3>Koşullu ifadeler</h3>" . "<br>";
// if ($args1 === $args2) {
//     print "Eşittir";
// } elseif ($args1 > $args2) {
//     print $args1 . " Büyüktür...";
// } elseif ($args1 < $args2) {
//     print $args1 . " Küçüktür...";
// } else {
//     print "Böyle bir Koşul Yok";
// }
// print "<br>";
// print "<h3>Diziler</h3>" . "<br>";


// $array = [
//     ["product" => "Telefon", "Marka" => "Samsung", "color" => "Siyah"],
//     [ "product" => "Bilgisayar", "Marka" => "Huawei", "color" => "Siyah","İşlemci Tipi"=>["i7","RYZEN 7"] ],    
//     ["product" => "Tablet", "Marka" => "Huawei", "color" => "Siyah"]
// ];
// print "<pre>";
// print_r($array);
// print "</pre>";
// print "<br>";
// print "<h3>Koşullu diziler 2</h3>" . "<br>";


//  foreach ($array as $key => $value) {
//   print   "Ürün Adı = ".$value['product']." ".$value['Marka']."<br>";


//  }
//  print "<h3>Koşullu diziler 3</h3>" . "<br>";
//  $array2 = [
//     "Bilgisayar",
//     "Telefon"
//  ];
// for ($i=0; $i < count($array2) ; $i++) { 
//     print  $array2[$i]."<br>";
// }
// print "<h3>Koşullu diziler 3 While</h3>" . "<br>";

// $array3 = [
//     "Bilgisayar",
//     "Telefon",
//     "Tablet",
//     "Playstation",
//     "Sırt Çantası",
//     "Bilgisayar"
// ];
// $a = 0;
// while ($a <= 5) {
//     print $array3[$a]."<hr/>";
//     $a++;
// }
// print "<h3>Ternary öperatörü</h3>" . "<br>";
// $sayi1 = 80;
// $sayi2 = 20;

// ternary öperatörü
// print ($sayi1 > $sayi2) ? 'Büyüktür' : 'Küçüktür';
// print "<br>";
// if ($sayi1 > $sayi2) {
//     # code...
//     print "Büyüktür";
// }else {
//   print "Küçüktür";
// }


// $sayi1 = null;
// $sayi2 = 20;
// null kontrol şekli 
// print $sayi1 ?? 'Değersiz';
// print $sayi1 ?: 'Değersiz';


// array map foksiyonu dizinin içini boşaltma
// $array4 = [
//     "Bilgisayar",
//     "Telefon",
//     "Tablet",
//     "Playstation",
//     "Sırt Çantası",
//     "Bilgisayar"
// ];

// $new_array = array_map(function ($item){
// return "ürünler :" . $item;
// },$array4);

// var_dump($new_array);

// $string = "Bilgisayar,Telefon,Kitap,Defter,Kalem";
// $array = explode(",",$string);
// print_r($array);

// $array4 = [
//         "Bilgisayar",
//         "Telefon",
//         "Tablet",
//         "Playstation",
//         "Sırt Çantası",
//         "Bilgisayar"
//     ];

//     $string = implode("<=>",$array4);
//     print_r($string);

//** Deneme Tekrar Kısmı Aşagıda*/ 

// $array = [
//     "Product" =>
//     [
//         "Ürün Ad" => "Bilgisayar",
//         "Ürün Kod" => "123412",
//         "Ürün Renk" => "Siyah",
//         "Ürün Boyut" => "15.6",
//         "Ürün işlemci" => ["Ryzen", "amd", "i5"],
//         "Ürün Barkod" => "4524525",
//     ],
//     "Product1" =>   [
//         "Ürün Ad" => "Bilgisayar",
//         "Ürün Kod" => "123412",
//         "Ürün Renk" => "Siyah",
//         "Ürün Boyut" => "15.6",
//         "Ürün işlemci" => ["Ryzen", "amd", "i5"],
//         "Ürün Barkod" => "4524525"
//     ],
//     "Product2" =>  [
//         "Ürün Ad" => "Bilgisayar",
//         "Ürün Kod" => "123412",
//         "Ürün Renk" => "Siyah",
//         "Ürün Boyut" => "15.6",
//         "Ürün işlemci" => ["Ryzen", "amd", "i5"],
//         "Ürün Barkod" => "4524525"
//     ],
//     "Product3" =>    [
//         "Ürün Ad" => "Bilgisayar",
//         "Ürün Kod" => "123412",
//         "Ürün Renk" => "Siyah",
//         "Ürün Boyut" => "15.6",
//         "Ürün işlemci" => ["Ryzen", "amd", "i5"],
//         "Ürün Barkod" => "4524525"
//     ]


// ];
// print "<pre>";
// print_r($array);

// print "</pre>";


$array = [
    "Product" => [
        "Bilgisayar" => [
            [
                "Ürün Adı" => "Huwaei",
                "Ürün Renk" => "Kurşun Gri",
                "Ürün Model" => "Madebook D15",
                "Ürün Depolama" => "500 SSD",
                "Ürün İşlemci" => ["AMD", "RYZEN", "İNTEL İ3"],
                "Ürün Yorum" => "Çok Güzel Bilgisayar"
            ],
            [
                "Ürün Adı" => "Samsung",
                "Ürün Renk" => "Kurşun Gri",
                "Ürün Model" => "Madebook D15",
                "Ürün Depolama" => "500 SSD",
                "Ürün İşlemci" => ["AMD", "RYZEN", "İNTEL İ3"],
                "Ürün Yorum" => "Çok Güzel Bilgisayar"
            ],
        ],
        "tablet" => [
            [
                "Ürün Adı" => "Huwaei",
                "Ürün Renk" => "Kurşun Gri",
                "Ürün Model" => "Madebook D15",
                "Ürün Depolama" => "500 SSD",
                "Ürün İşlemci" => ["AMD", "RYZEN", "İNTEL İ3"],
                "Ürün Yorum" => "Çok Güzel Bilgisayar"
            ],
            [
                "Ürün Adı" => "Samsung",
                "Ürün Renk" => "Kurşun Gri",
                "Ürün Model" => "Madebook D15",
                "Ürün Depolama" => "500 SSD",
                "Ürün İşlemci" => ["AMD", "RYZEN", "İNTEL İ3"],
                "Ürün Yorum" => "Çok Güzel Bilgisayar"
            ],
        ],
       
    ]


];
// print "<pre>";
// print_r($array);

// print "</pre>";


foreach ($array['Product'] as $arraytype =>$products ) {
   foreach ($products as $key) {
    echo "ürün Adı = ". $key['Ürün Adı']."<br>"."Ürün Renk =". $key['Ürün Renk']."<br>";
    
   }
}

?>


