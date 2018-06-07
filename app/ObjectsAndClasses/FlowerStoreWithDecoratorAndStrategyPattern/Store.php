<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern;

use ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct;

/**
 * Class Store
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern
 */
class Store
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var array
     */
    private $products = [];

    /**
     * Store constructor.
     *
     * @param string $name
     * @param string $address
     */
    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct $product
     * @param int                     $amount
     *
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Store
     */
    public function addProduct(IProduct $product, int $amount): Store
    {
        if(!empty($this->products[$product->getCategory()][$product->getName()])) {
            $this->products[$product->getCategory()][$product->getName()]['amount'] += $amount;

            return $this;
        }

        $this->products[$product->getCategory()][$product->getName()] = [
            'product' => $product,
            'amount' => $amount,
        ];

        return $this;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct $product
     *
     * @return int
     */
    public function getProductAmount(IProduct $product): int
    {
        return $this->products[$product->getCategory()][$product->getName()]['amount'] ?? 0;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct $product
     * @param int                     $amount
     *
     * @return int
     */
    public function reserveProduct(IProduct $product, int $amount): int
    {
        if($this->getProductAmount($product)<$amount)
        {
            echo $product->getName().' is not available.';
            return 0;
        }

        if($this->getProductAmount($product) == $amount)
        {
            unset($this->products[$product->getCategory()][$product->getName()]);
        }
        else {
            $this->products[$product->getCategory()][$product->getName()]['amount'] -= $amount;
        }

        return $amount;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Order $order
     *
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Order
     */
    public function handleOrder(Order $order): Order
    {
        if(!$order->isPaid()) {
            $order->getPayment()->createPayment($order->getOrderSum());
            $order->setPaid();
        }
        return $order->setCompleted();
    }

    /**
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Order $order
     */
    public function sendConfirmation(Order $order): void
    {
        if($order->isCompleted()) {
            echo 'Confirmation is sent to phone number: ' . $order->getClient()->getPhone() . '.';
        }
        return;
    }
}
