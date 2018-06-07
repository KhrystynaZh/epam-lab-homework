<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern;

use ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct;
use ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\ProductService;

/**
 * Class Basket
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern
 */
class Basket
{

    /**
     * @var \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Client
     */
    private $client;

    /**
     * @var array
     */
    private $products = [];

    /**
     * @var float
     */
    private $basketSum = 0;

    /**
     * Basket constructor.
     *
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Client $client
     */
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
     * @return float
     */
    public function getBasketSum(): float
    {
        return $this->basketSum;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Store             $store
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct $product
     * @param int                     $amount
     * @param array                   $addServices
     *
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Basket
     */
    public function addProduct(Store $store, IProduct $product, int $amount, array $addServices = []): Basket
    {
        if(!$store->reserveProduct($product, $amount)) {
            return $this;
        }

        if($addServices) {
            $product = (new ProductService($product, $addServices))->getProduct();
        }

        $this->products[$product->getCategory()][$product->getName()] = [
            'product' => $product,
            'amount' => $amount,
        ];

        $this->basketSum += ($product->getPrice()) * $amount;

        return $this;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct $product
     *
     * @return int
     */
    private function getProductAmount(IProduct $product): int
    {
        return $this->products[$product->getCategory()][$product->getName()]['amount'] ?? 0;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Store             $store
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct $product
     * @param int                     $amount
     * @param array                   $addServices
     *
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Basket
     */
    public function deleteProduct(Store $store, IProduct $product, int $amount, array $addServices = []): Basket
    {
        if($this->getProductAmount($product) <= $amount)
        {
            unset($this->products[$product->getCategory()][$product->getName()]);
        }
        else {
            $this->products[$product->getCategory()][$product->getName()]['amount'] -= $amount;
        }

        if($addServices) {
            $product = (new ProductService($product, $addServices))->getProduct();
        }

        $this->basketSum -= ($product->getPrice()) * $amount;
        $store->addProduct($product, $amount);
        return $this;
    }

    /**
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Basket
     */
    public function clearBasket(): Basket
    {
        $this->products = [];
        $this->basketSum = 0;

        return $this;
    }
}
