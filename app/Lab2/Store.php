<?php

namespace Lab2;

class Store
{
    private $name;
    private $address;
    private $products = [];
    private $payment;
    private $delivery;
    private $discount;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @return mixed
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param \Lab2\PaymentInterface $payment
     */
    public function setPayment(PaymentInterface $payment): void
    {
        $this->payment = $payment;
    }

    /**
     * @param mixed $delivery
     */
    public function setDelivery($delivery): void
    {
        $this->delivery = $delivery;
    }

    /**
     * @param \Lab2\Product $product
     * @param int           $amount
     *
     * @return \Lab2\Store
     */
    public function addProduct(Product $product, int $amount): Store
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
     * @param Product $product
     *
     * @return int
     */
    public function getProductAmount(Product $product): int
    {
        return $this->products[$product->getCategory()][$product->getName()]['amount'] ?? 0;
    }

    /**
     * @param \Lab2\Product $product
     * @param int           $amount
     *
     * @return int
     */
    public function reserveProduct(Product $product, int $amount): int
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
}