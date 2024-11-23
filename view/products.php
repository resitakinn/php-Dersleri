<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $title ?></title>
</head>
<body>
    <h1>Ürünler Sayfadasınız</h1>

    



    <table border="1" >
        <tr >
            <th>Product id</th>
            <th>Ürün Adı</th>
            <th>Ürün Renk kod</th>
            <th>Renk kod Açıklama</th>
        </tr>


        <?php foreach ($products as $productsCek) { ?>

            <tr>
            <th><?php print $productsCek['product_id'] ?></th>
            <th><?php print $productsCek['name'] ?></th>
            <th><?php print $productsCek['color_code'] ?></th>
            <th><?php print $productsCek['color_name'] ?></th>
        </tr>
            <?php   }  ?>

     
    </table>
</body>
</html>