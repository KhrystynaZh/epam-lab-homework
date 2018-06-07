<?php

namespace ObjectsAndClasses\FlowerStore;

class Stock
{
    private $name;
    private $products = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function putOnStock(Product $product, int $amount): Stock
    {
        if(!empty($this->products[$product->getType()][$product->getName()])) {
            $this->products[$product->getType()][$product->getName()]['amount'] += $amount;

            return $this;
        }

        $this->products[$product->getType()][$product->getName()] = [
            'product' => $product,
            'amount' => $amount,
        ];

        return $this;
    }

    public function getProductAmount(Product $product): int
    {
        return $this->products[$product->getType()][$product->getName()]['amount'] ?? 0;
    }

    public function getFromStock(Product $product, int $amount): int
    {
        if($this->getProductAmount($product)<$amount)
        {
            echo $product->getName().' is not available on '.$this->getName();

            return 0;
        }

        if($this->getProductAmount($product) == $amount)
        {
            unset($this->products[$product->getType()][$product->getName()]);
        }
        else {
            $this->products[$product->getType()][$product->getName()]['amount'] -= $amount;
        }

        return $amount;
    }
}