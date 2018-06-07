<?php

namespace ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products;

/**
 * Class ProductService
 * @package ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products
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
     * @var \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct
     */
    private $product;

    /**
     * ProductService constructor.
     *
     * @param \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct $product
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
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct
     */
    public function getProduct(): IProduct
    {
        return $this->product;
    }

    /**
     * @param array $addServices
     *
     * @return \ObjectsAndClasses\FlowerStoreWithDecoratorAndStrategyPattern\Products\IProduct
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