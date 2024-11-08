<?php

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


