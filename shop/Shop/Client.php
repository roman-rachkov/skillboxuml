<?php

namespace Shop;

class Client implements HasMoney
{

    private Product $product;
    protected int $money;

    public function __construct(int $money)
    {
        $this->money = $money;
    }

    public function getMoney(): int
    {
        return $this->money;
    }

    public function canBuyProduct(Product $product): bool
    {
        return $this->getMoney() >= $product->getPrice();
    }

    public function buyProduct(Product $product): void
    {
        $this->money -= $product->getPrice();
        $this->product = $product;
    }

    public function getBoughtProduct(): Product | bool
    {
        return $this->product ?? false;
    }

}