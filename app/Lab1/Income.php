<?php

namespace Lab1;

class Income
{
    private $incomeNumber;
    private $incomeDate;
    private $products = [];
    private $incomeSum = 0;

    public function __construct(int $incomeNumber, string $incomeDate) {
        $this->incomeNumber = $incomeNumber;
        $this->incomeDate = $incomeDate;
    }

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

    public function getIncomeSum(): int
    {
        return $this->incomeSum;
    }

}