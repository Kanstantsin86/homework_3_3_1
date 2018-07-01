<?php

spl_autoload_register(
    function ($className) {
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $className . '.php';
        if (file_exists($filePath)){
            require_once $filePath;
        }
    }
);

spl_autoload_register(
    function ($interfaceName) {
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'interfaces' . DIRECTORY_SEPARATOR . $interfaceName . '.php';
        if (file_exists($filePath)){
            require_once $filePath;
        } 
    }
);

/*use classes\Product as Product; 
use classes\Car as Car; 
use classes\TV as TV;
use classes\BallPen as BallPen;
use classes\Duck as Duck;
use classes\Cart as Cart;
use classes\Order as Order;

use interfaces\CarInterface as CarInterface; 
use interfaces\TvInterface as TvInterface;
use interfaces\BallPenInterface as BallPenInterface;
use interfaces\DuckInterface as DuckInterface;*/

$HondaCivic = new Car('Автомобили', 'Honda Civic Type R', 0, 15, 10, 50000, 0, 
        'Honda Civic Type R', 2016, 6500, 'gas', 'hatchback', 'red');
//checkTheEnvironmentalFriendliness($HondaCivic->engineType);

$TeslaModelS = new Car('Автомобили', 'Tesla Model S P100D', 0, 5, 10, 90000, 0, 
        'Tesla Model S P100D', 2016, 568, 'electric', 'hatchback', 'black');
//checkTheEnvironmentalFriendliness($TeslaModelS->engineType);

$beryozka215 = new TV('Телевизоры', 'Beryozka-215', 0, 0, 99, 100, 0,
        'Beryozka-215', 1976, 'kinescope', false, 24, 2, true, false, false, 8);


$samsungUE55MU7000U = new TV('Телевизоры', 'Samsung UE55MU7000U', 0, 20, 10, 1500, 0, 
        'Samsung UE55MU7000U', 2017, 'LCD', true, 55, 107000000, true, true, true, 200);

$parkerPen = new BallPen('Шариковые ручки', 'Parker', 0, 20, 5, 10, 0, 
    'gold', 13, true, 'black');
//write($parkerPen->inkColor);

$erichKrausePen = new BallPen('Шариковые ручки', 'ErichKrause', 0, 20, 5, 3, 0,
    'white', 15, false, 'blue');
//write($erichKrausePen->inkColor);

$billy = new Duck ('Утки', 'Billy', 0, 10, 10, 50, 0, 
    2, 'small', 'brown', 'Billy-krya', 2);
//voice($billy->voice, $billy->voiceCount);

$willy = new Duck ('Утки', 'Willy', 0, 10, 10, 80, 0, 
    1, 'small', 'yellow', 'Willy-krya', 3);
//voice($willy->voice, $willy->voiceCount);

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
        
    <?= printRow($HondaCivic); ?>
    <?= printRow($TeslaModelS); ?>
    <?= printRow($beryozka215); ?>
    <?= printRow($samsungUE55MU7000U); ?>
    <?= printRow($parkerPen); ?>
    <?= printRow($erichKrausePen); ?>
    <?= printRow($billy); ?>
    <?= printRow($willy); ?>
   
</table>
<form>
    <button>Перейти к заказу</button>
</form>
 </body>
</html>
