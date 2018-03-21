<?php

namespace Lab2;

class Basket
{
    private $client;
    private $products = [];
    private $basketSum = 0;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @return int
     */
    public function getBasketSum(): int
    {
        return $this->basketSum;
    }

    /**
     * @param \Lab2\Store   $store
     * @param \Lab2\Product $product
     * @param int           $amount
     *
     * @return \Lab2\Basket
     */
    public function addProduct(Store $store, Product $product, int $amount): Basket
    {
        if(!$store->reserveProduct($product, $amount)) {
            return $this;
        }

        $this->products[$product->getCategory()][$product->getName()] = [
            'product' => $product,
            'amount' => $amount,
        ];

        $this->basketSum += ($product->getPrice()) * $amount;

        return $this;
    }

    /**
     * @param \Lab2\Product $product
     *
     * @return int
     */
    public function getProductAmount(Product $product): int
    {
        return $this->products[$product->getCategory()][$product->getName()]['amount'] ?? 0;
    }

    /**
     * @param \Lab2\Store   $store
     * @param \Lab2\Product $product
     * @param int           $amount
     *
     * @return \Lab2\Basket
     */
    public function deleteProduct(Store $store, Product $product, int $amount): Basket
    {
        if($this->getProductAmount($product) >= $amount)
        {
            unset($this->products[$product->getCategory()][$product->getName()]);
        }
        else {
            $this->products[$product->getCategory()][$product->getName()]['amount'] -= $amount;
        }

        $this->basketSum -= ($product->getPrice()) * $amount;
        $store->addProduct($product, $amount);
        return $this;
    }

}