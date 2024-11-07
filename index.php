<?php
$strings_variable = 'Mehmet Reşit Akın';
$args1 = 20;
$args2 = 20;
print "<br>";
print "<h3>Koşullu ifadeler</h3>" . "<br>";
if ($args1 === $args2) {
    print "Eşittir";
} elseif ($args1 > $args2) {
    print $args1 . " Büyüktür...";
} elseif ($args1 < $args2) {
    print $args1 . " Küçüktür...";
} else {
    print "Böyle bir Koşul Yok";
}
print "<br>";
print "<h3>Diziler</h3>" . "<br>";


$array = [
    ["product" => "Telefon", "Marka" => "Samsung", "color" => "Siyah"],
    [ "product" => "Bilgisayar", "Marka" => "Huawei", "color" => "Siyah","İşlemci Tipi"=>["i7","RYZEN 7"] ],    
    ["product" => "Tablet", "Marka" => "Huawei", "color" => "Siyah"]
];
print "<pre>";
print_r($array);
print "</pre>";
print "<br>";
print "<h3>Koşullu diziler 2</h3>" . "<br>";


 foreach ($array as $key => $value) {
  print   "Ürün Adı = ".$value['product']." ".$value['Marka']."<br>";


 }
 print "<h3>Koşullu diziler 3</h3>" . "<br>";
 $array2 = [
    "Bilgisayar",
    "Telefon"
 ];
for ($i=0; $i < count($array2) ; $i++) { 
    print  $array2[$i]."<br>";
}

?>