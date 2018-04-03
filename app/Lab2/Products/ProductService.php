<?php

namespace Lab2\Products;

/**
 * Class ProductService
 * @package Lab2\Products
 */
class ProductService
{
    /**
     * @var array
     */
    private $addServices = [
        'package' => ProductPackage::class,
        'greetingCard' => ProductGreetingCard::class,
    ];

    /**
     * @var \Lab2\Products\IProduct
     */
    private $product;

    /**
     * ProductService constructor.
     *
     * @param \Lab2\Products\IProduct $product
     * @param array                   $addServices
     */
    public function __construct(IProduct $product, array $addServices = [])
    {
        $this->product = $product;
        if($addServices) {
            $this->handleAddServices($addServices);
        }
    }

    /**
     * @return \Lab2\Products\IProduct
     */
    public function getProduct(): IProduct
    {
        return $this->product;
    }

    /**
     * @param array $addServices
     *
     * @return \Lab2\Products\IProduct
     */
    public function handleAddServices(array $addServices = []): IProduct
    {
        foreach($addServices as $service) {
            if(!$service || empty($this->addServices[$service])) {
                continue;
            }

            $this->product = new $this->addServices[$service]($this->product);
        }

        return $this->product;
    }
}