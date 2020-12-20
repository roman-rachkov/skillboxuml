<?php

namespace Shop;

class Shop implements HasMoney
{

    private array $products;
    private int $money = 0;

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getProductsSortedByPrice(): array
    {
        $arr = $this->products;
        usort($arr, function ($a, $b) {
            if ($a->getPrice() == $b->getPrice()) {
                return 0;
            }
            return ($a->getPrice() < $b->getPrice()) ? 1 : -1;
        });
        return $arr;
    }

    public function sellTheMostExpensiveProduct(Client $client)
    {
        foreach ($this->getProductsSortedByPrice() as $product) {
            if ($client->canBuyProduct($product)) {
                $client->buyProduct($product);
                $this->sellProduct($product);
                $this->money += $product->getPrice();
                break;
            }
        }
    }

    public function getMoney(): int
    {
        return $this->money;
    }

    private function sellProduct(Product $product): void
    {
        unset($this->products[array_search($product, $this->products)]);
    }
}