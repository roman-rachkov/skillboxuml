<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

$shop = new \Shop\Shop();
$shop->addProduct(new \Shop\Product('Товар 10', 10));
$shop->addProduct(new \Shop\Product('Товар 10', 10));
$shop->addProduct(new \Shop\Product('Товар 1000', 1000));
$shop->addProduct(new \Shop\Product('Товар 1000', 1000));
$shop->addProduct(new \Shop\Product('Товар 100', 100));
$shop->addProduct(new \Shop\Product('Товар 100', 100));
$shop->addProduct(new \Shop\Product('Товар 100', 100));

$clients[] = new \Shop\Client(10);
$clients[] = new \Shop\Client(1);
$clients[] = new \Shop\Client(1000000);
$clients[] = new \Shop\Client(300);
$clients[] = new \Shop\Client(100);

foreach ($clients as $key => $client) {
    echo 'Клиент '.($key+1).' встал в очередь, у него было денег: '.$client->getMoney().'<br>';
    $shop->sellTheMostExpensiveProduct($client);
    if($client->getBoughtProduct()){
        echo 'Клиент '.($key+1).' купил товар '.$client->getBoughtProduct()->getName().', у него осталось денег: '.$client->getMoney().'<br>';
    } else{
        echo 'Клиент '.($key+1).' ничего не купил, у него осталось денег: '.$client->getMoney().'<br>';
    }
    echo "<br>";
}

echo 'Товаров купленно на сумму '.$shop->getMoney();