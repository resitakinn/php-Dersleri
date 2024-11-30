<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $title ?></title>
</head>
<body>
    <h1>Ürün Sayfadasınız</h1>

    



    <table border="1" >
        <tr >
            <th>Product id</th>
            <th>Ürün Adı</th>
            <th>Ürün Renk kod</th>
            <th>Renk kod Açıklama</th>
        </tr>


         <?php
     
        if ($product) {
           
        
             ?> 

            <tr>
            <th><?php print $product['id'] ?></th>
            <th><?php print $product['name'] ?></th>
            <th><?php print $product['color_code'] ?></th>
            <th><?php print $product['color_name'] ?></th>
        </tr>
            <?php   
     
    }else {
        print "<b>Veri Girşi Henuz Yoktur</b>";
    }
          ?>

     
    </table>
</body>
</html>