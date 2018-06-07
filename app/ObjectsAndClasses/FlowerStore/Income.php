<?php

namespace ObjectsAndClasses\FlowerStore;

/**
 * Class Income
 * @package ObjectsAndClasses\FlowerStore
 */
class Income
{
    /**
     * @var int
     */
    private $incomeNumber;

    /**
     * @var string
     */
    private $incomeDate;

    /**
     * @var array
     */
    private $products = [];

    /**
     * @var int
     */
    private $incomeSum = 0;

    /**
     * Income constructor.
     *
     * @param int    $incomeNumber
     * @param string $incomeDate
     */
    public function __construct(int $incomeNumber, string $incomeDate) {
        $this->incomeNumber = $incomeNumber;
        $this->incomeDate = $incomeDate;
    }

    /**
     * @param \ObjectsAndClasses\FlowerStore\Product $product
     * @param int                                    $amount
     * @param \ObjectsAndClasses\FlowerStore\Stock   $stock
     *
     * @return \ObjectsAndClasses\FlowerStore\Income
     */
    public function addProduct(Product $product, int $amount, Stock $stock): Income
    {
        $this->products[] = [
            'product' => $product,
            'amount' => $amount,
        ];
        $this->incomeSum += $amount * $product->getPrice();

        $stock->putOnStock($product, $amount);

        return $this;
    }

    /**
     * @return int
     */
    public function getIncomeSum(): int
    {
        return $this->incomeSum;
    }
}