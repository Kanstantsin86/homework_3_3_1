<?php
require_once 'index.php';
$product = $HondaCivic;
function printRow($product)
{
    echo '<tr>
        <td>' . $product->name . '</td>
        <td>' . $product->category . '</td>
        <td>' . $product->price . '</td>
        <td>' . $product->basketQuantity . '</td>
        <td><form name="test" method="post" action="">
  
   <input type="text" size="5" name="count">
   <input type="hidden" name="<?=$product->price;?>" value="<?=$product;?>">
  <input type="submit" value="Добавить в корзину">
   <input type="reset" value="Удалить всё из корзины"></p>
 </form></td>
    </tr>';
         
}

if (isset($_POST["submit"])) {
            $product->basketQuantity = $_POST["count"];
            echo '<td>' . $product->basketQuantity . '</td>';
}
?>

<!DOCTYPE HTML>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Выбор товара</title>
 </head>
 <body>
     
     <h1>Выберите товар</h1>
 <table>
    <tr>
        <td>Название</td>
        <td>Категория</td>
        <td>Цена</td>
        <td>В корзине</td>
        <td>Добавьте нужное количество в корзину</td> 
    </tr>
    
    
    <?= printRow($HondaCivic) ?>
    <?= printRow($TeslaModelS) ?>
    <?= printRow($beryozka215) ?>
    <?= printRow($samsungUE55MU7000U) ?>
    <?= printRow($parkerPen) ?>
    <?= printRow($erichKrausePen) ?>
    <?= printRow($billy) ?>
    <?= printRow($willy) ?>
    

</table>
<form>
    <button>Перейти к заказу</button>
</form>
 </body>
</html>
