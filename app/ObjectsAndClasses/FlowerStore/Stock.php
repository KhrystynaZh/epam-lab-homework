<?php

namespace ObjectsAndClasses\FlowerStore;

/**
 * Class Stock
 * @package ObjectsAndClasses\FlowerStore
 */
class Stock
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $products = [];

    /**
     * Stock constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStore\Product $product
     * @param int                                    $amount
     *
     * @return \ObjectsAndClasses\FlowerStore\Stock
     */
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

    /**
     * @param \ObjectsAndClasses\FlowerStore\Product $product
     *
     * @return int
     */
    public function getProductAmount(Product $product): int
    {
        return $this->products[$product->getType()][$product->getName()]['amount'] ?? 0;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStore\Product $product
     * @param int                                    $amount
     *
     * @return int
     */
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